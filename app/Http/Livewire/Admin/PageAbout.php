<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\Session;
use Livewire\WithFileUploads;
use App\Page;
use Illuminate\Support\Str;

class PageAbout extends Component
{
    use WithFileUploads;

    public $title;
    public $image;
    public $imageShow;
    public $description;
    public $maps;
    
    public function mount()
    {
        Session::put('menu_active', 'about');
        $data = Page::where('type', 'about')->first();
        if($data){
            $this->title = $data['title'];
            $this->imageShow = $data['image'];
            $slice = json_decode($data['description'], true);
            $description = $slice['description'];
            $maps = $slice['maps'];
            $this->description = empty($description)? '' : $description;
            $this->maps = $maps;
        }
    }

    public function render()
    {
        return view('livewire.admin.page-about');
    }

    public function store()
    {
        $cek = Page::where('type', 'about')->first();
        $image = "";
        $photo = $this->image;
        if($this->image){
            $validatedData = $this->validate([
                'image' => 'image|mimes:jpeg,png,jpg|max:1024'
            ]);
            $photo = $this->image->store("image_about",'public');
            $url = storage_path('app/public/'.$cek->image);
            
            if(is_file($url)){
                unlink($url);
            }
        }
        $description = [
            'description' => $this->description,
            'maps' => $this->maps
        ];
        if($cek->type != 'about'){
            $data = Page::create([
                'title' => $this->title,
                'slug' => Str::slug($this->title, '-'),
                'description' => json_encode($description),
                'image' => $image,
                'status' => 1,
            ]);
        }else{
            $cek->update([
                'title' => $this->title,
                'slug' => Str::slug($this->title, '-'),
                'description' => json_encode($description),
                'image' => $image,
                'status' => 1,
            ]);
        }

        //flash message
        session()->flash('message', array('type' => 'success', 'content' => 'Data berhasil disimpan'));

        //redirect
        // return redirect()->route('admin.page-index', 'about');
    }
}
