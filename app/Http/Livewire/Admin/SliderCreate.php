<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Slider;
use Livewire\WithFileUploads;

class SliderCreate extends Component
{
    use WithFileUploads;
    public $image;

    public function render()
    {
        return view('livewire.admin.slider-create');
    }

    public function store()
    {
        $validatedData = $this->validate([
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ],
        [
            'image.image' => 'Harus bentuk Gambar',
            'image.mimes' => 'Gambar harus bentuk jpeg, png, jpg',
            'image.max' => 'Maksimal Gambar berukuran 5MB' 
        ]);
        $image = $this->image->store("slider",'public');

        $data = Slider::create([
            'image' => $image
        ]);

        $this->resetInput();
        session()->flash('message', array('type' => 'success', 'content' => 'Data berhasil disimpan'));
        $this->emit('storeSlider', $data);
    }

    public function resetInput()
    {
        $this->image = null;
    }
}
