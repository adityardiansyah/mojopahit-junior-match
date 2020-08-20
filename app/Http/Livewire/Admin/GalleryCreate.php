<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Gallery;
use Livewire\WithFileUploads;

class GalleryCreate extends Component
{
    use WithFileUploads;

    public $title;
    public $image = [];
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
            'image.*' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);
        foreach ($this->image as $key => $value) {
            $this->image[$key] = $value->store("galery",'public');
        }

        $data = Gallery::create([
            'title' => $this->title,
            'image' => json_encode($this->image),
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
