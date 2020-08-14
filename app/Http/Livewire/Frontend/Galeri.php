<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use Livewire\WithPagination;
use App\Gallery;

class Galeri extends Component
{
    use WithPagination;
    public $paginate = 12;

    public function render()
    {
        return view('livewire.frontend.galeri', [
            'galeri' => Gallery::latest()->paginate($this->paginate)
        ]);
    }
}
