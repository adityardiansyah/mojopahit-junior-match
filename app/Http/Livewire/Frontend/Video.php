<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use Livewire\WithPagination;
use App\Video as Videos;

class Video extends Component
{
    use WithPagination;

    public $paginate = 12;

    public function render()
    {
        return view('livewire.frontend.video', [
            'video' => Videos::latest()->paginate($this->paginate)
        ]);
    }
}
