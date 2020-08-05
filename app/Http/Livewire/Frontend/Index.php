<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\Post;
use App\Video;
use App\Gallery;

class Index extends Component
{
    public function render()
    {
        return view('livewire.frontend.index', [
            'artikel' => Post::where('status','PUBLISH')->latest()->limit(4)->get(),
            'trending' => Post::where('status','PUBLISH')->orderBy('view', 'desc')->limit(5)->get(),
            'video' => Video::latest()->limit(3)->get(),
            'galeri' => Gallery::latest()->limit(6)->get()
        ]);
    }
}
