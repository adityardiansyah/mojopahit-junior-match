<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\Slider as Slide;

class Slider extends Component
{
    public function render()
    {
        $data = Slide::latest()->get();
        foreach($data as $key => $item){
            $pisah = json_decode($item->text, true);
            $item->title = $pisah['title'];
            $item->sub_title = $pisah['sub_title'];
            $item->link = $pisah['link'];
        }

        return view('livewire.frontend.slider', compact('data'));
    }
}
