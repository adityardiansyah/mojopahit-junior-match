<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Slider;
use Livewire\WithFileUploads;

class SliderCreate extends Component
{
    use WithFileUploads;
    public $image;
    public $text_big;
    public $text_small;
    public $link;

    public function render()
    {
        return view('livewire.admin.slider-create');
    }

    public function store()
    {
        $validatedData = $this->validate([
            'image' => 'image|mimes:jpeg,png,jpg|max:8192',
        ],
        [
            'image.image' => 'Harus bentuk Gambar',
            'image.mimes' => 'Gambar harus bentuk jpeg, png, jpg',
            'image.max' => 'Maksimal Gambar berukuran 8MB' 
        ]);
        $image = $this->image->store("slider",'public');
        $text = [
            'title' => $this->text_big,
            'sub_title' => $this->text_small,
            'link' => $this->link
        ];

        $data = Slider::create([
            'image' => $image,
            'text' => json_encode($text)
        ]);

        $this->resetInput();
        session()->flash('message', array('type' => 'success', 'content' => 'Data berhasil disimpan'));
        $this->emit('storeSlider', $data);
    }

    public function resetInput()
    {
        $this->image = null;
        $this->text_big = null;
        $this->text_small = null;
        $this->link = null;
    }
}
