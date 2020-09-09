<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\Category as Kategori;
use App\Post;
use Livewire\WithPagination;


class Category extends Component
{
    use WithPagination;
    public $paginate = 9;
    public $blogs;
    public $cat;

    public function mount($slug)
    {
        try{
            $this->cat = Kategori::where('slug', $slug)->first();
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

    public function render()
    {
        $data = Post::where('category_id', $this->cat->id)->latest()->paginate($this->paginate);
        return view('livewire.frontend.category', [
            'blog' => $data 
        ]);
    }
}
