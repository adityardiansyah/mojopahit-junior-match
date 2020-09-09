<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use Livewire\WithPagination;
use App\Post;

class Blog extends Component
{
    use WithPagination;

    public $paginate = 9;

    public function render()
    {
        return view('livewire.frontend.blog', [
            'blog' => Post::latest()->where('status','PUBLISH')->paginate($this->paginate)
        ]);
    }
}
