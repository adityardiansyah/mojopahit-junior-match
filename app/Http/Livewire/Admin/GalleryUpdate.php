<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Gallery;

class GalleryUpdate extends Component
{
    public $gallery_id;
    public $image;
    public $image_gallery;
    public $title;
    public $category;
    protected $listeners = [
        'dataEditGalery' => 'handleEditGalery'
    ];

    public function render()
    {
        return view('livewire.admin.gallery-update');
    }

    public function handleEditGalery($data)
    {
        $this->gallery_id = $data['id'];
        $this->title = $data['title'];
        $this->image_gallery = $data['image'];
        $this->category = $data['category'];
    }

    public function update()
    {
        $check = Gallery::find($this->gallery_id);
        $image = $this->image_gallery;
        if($this->image){
            $validatedData = $this->validate([
                'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            ],
            [
                'image.image' => 'Harus bentuk Gambar',
                'image.mimes' => 'Gambar harus bentuk jpeg, png, jpg',
                'image.max' => 'Maksimal Gambar berukuran 2MB' 
            ]);
            $image = $this->image->store("galery",'public');    
            $url = storage_path('app/public/'.$check->image);
            
            if(is_file($url)){
                unlink($url);
            }
        }
        if($check){
            $check->update([
                'title' => $this->title,
                'image' => $image,
                'category' => $this->category
            ]);
            $this->resetInput();
            $this->emit('editGallery');
        }
    }

    public function resetInput()
    {
        $this->title = null;
        $this->image = null;
        $this->image_gallery = null;
        $this->category = null;
    }
}
