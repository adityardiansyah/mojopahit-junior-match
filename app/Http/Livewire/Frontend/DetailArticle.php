<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\Post;
use App\Category;

class DetailArticle extends Component
{
    public $title;
    public $description;
    public $user_id;
    public $category_id;
    public $image;
    public $published_at;
    public $meta_title;
    public $category_all;
    public $post_category;

    public function mount($slug)
    {
        try{
            $cek = Post::where('slug',$slug)->first();
            $this->title = $cek->title;
            $this->description = $cek->description;
            $this->user_id = $cek->user->name;
            $this->category_id = $cek->category->name;
            $this->image = $cek->image;
            $this->published_at = $cek->published_at;
            $this->meta_title = $cek->meta_title;

            $this->category_all = Category::orderBy('name','asc')->get();
            foreach($this->category_all as $key => $item){
                $pos = Post::where('category_id', $item->id)->get()->count();
                $this->category_all[$key]->total = $pos;
            }
            $this->post_category = Post::where('slug','!=',$slug)->where('category_id', $cek->category_id)->limit(5)->get();
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }
    public function render()
    {
        return view('livewire.frontend.detail-article');
    }
}
