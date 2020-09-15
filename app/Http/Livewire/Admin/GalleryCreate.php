<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Gallery;
use Livewire\WithFileUploads;

class GalleryCreate extends Component
{
    use WithFileUploads;

    public $title;
    public $image;
    public $category;

    public function render()
    {
        return view('livewire.admin.gallery-create');
    }

    public function store()
    {
        $this->validate([
            'title' => 'required',
            'category' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg',
        ]);
        $gambar = [];
        if($this->image != null){
          foreach ($this->image as $key => $value) {
            $this->image[$key] = $value->store("galery",'public');
            array_push($gambar, $this->image[$key]);
          }

          $data = Gallery::create([
            'title' => $this->title,
            'image' => json_encode($gambar),
            'category' => $this->category
          ]);
          $this->resetInput();
          $this->emit('storeGalery', 'success');
        }else{
          $this->emit('storeGalery', 'error');
        }

    }
    public function resetInput()
    {
        $this->title = null;
        $this->image = null;
        $this->category = null;
    }
}
