<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Slider;

class SliderUpdate extends Component
{
    use WithFileUploads;

    public $image_slider;
    public $slider_id;
    public $image;
    public $text_big;
    public $text_small;
    public $link;

    protected $listeners = [
        'dataEditSlider' => 'handleEditSlider'
    ];

    public function render()
    {
        return view('livewire.admin.slider-update');
    }

    public function handleEditSlider($data)
    {
        $this->image_slider = $data['image'];
        $this->slider_id = $data['id'];
        $this->text_big = $data['title'];
        $this->text_small = $data['sub_title'];
        $this->link = $data['link'];
    }

    public function update()
    {
        $check = Slider::find($this->slider_id);
        $image = $this->image_slider;
        if($this->image){
            $validatedData = $this->validate([
                'image' => 'image|mimes:jpeg,png,jpg|max:8192',
            ],
            [
                'image.image' => 'Harus bentuk Gambar',
                'image.mimes' => 'Gambar harus bentuk jpeg, png, jpg',
                'image.max' => 'Maksimal Gambar berukuran 8MB' 
            ]);
            $image = $this->image->store("slider",'public');    
            $url = storage_path('app/public/'.$check->image);
            
            if(is_file($url)){
                unlink($url);
            }
        }
        $text = [
            'title' => $this->text_big,
            'sub_title' => $this->text_small,
            'link' => $this->link
        ];
        if($check){
            $check->update([
                'image' => $image,
                'text' => json_encode($text)
            ]);
            $this->resetInput();
            $this->emit('editSlider');
        }
    }

    public function resetInput()
    {
        $this->image = null;
        $this->image_slider = null;
    }
}
