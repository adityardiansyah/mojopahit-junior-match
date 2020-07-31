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
        $validatedData = $this->validate([
            'title' => 'required',
            'category' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ],
        [
            'image.image' => 'Harus bentuk Gambar',
            'image.mimes' => 'Gambar harus bentuk jpeg, png, jpg',
            'image.max' => 'Maksimal Gambar berukuran 5MB' 
        ]);
        $image = $this->image->store("galery",'public');

        $data = Gallery::create([
            'title' => $this->title,
            'image' => $image,
            'category' => $this->category
        ]);

        $this->resetInput();
        // session()->flash('message', array('type' => 'success', 'content' => 'Data berhasil disimpan'));
        $this->emit('storeGalery', $data);
    }
    public function resetInput()
    {
        $this->title = null;
        $this->image = null;
        $this->category = null;
    }
}
