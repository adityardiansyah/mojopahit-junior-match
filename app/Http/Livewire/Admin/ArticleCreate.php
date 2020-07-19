<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Category;
use App\Post;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Auth;

class ArticleCreate extends Component
{
    use WithFileUploads;

    public $title;
    public $description;
    public $category_id;
    public $user_id;
    public $slug;
    public $image;
    public $meta_description;
    public $meta_title;
    public $meta_keyword;
    public $published_at;
    public $status;

    public function mount()
    {
        $this->user_id = Auth::user()->id;
    }

    public function render()
    {
        return view('livewire.admin.article-create', [
            'category' => Category::orderBy('name','asc')->get()
        ]);
    }

    public function store()
    {
        $image = "";
        if($this->image){
            $validatedData = $this->validate([
                'image' => 'image|mimes:jpeg,png,jpg|max:2048'
            ]);
            $image = $this->image->store("post",'public');
        }

        Post::create([
            'title' => $this->title,
            'user_id' => $this->user_id,
            'category_id' => $this->category_id,
            'description' => $this->description,
            'image' => $image,
            'slug' => empty($this->slug)? Str::slug($this->title) : $this->slug,
            'meta_title' => $this->meta_title,
            'meta_description' => $this->meta_description,
            'meta_keyword' => $this->meta_keyword,
            'status' => $this->status,
            'published_at' => date('Y-m-d', strtotime($this->published_at))
        ]);

        //flash message
        session()->flash('message', array('type' => 'success', 'content' => 'Data berhasil disimpan'));

        //redirect
        return redirect()->route('admin.article');
    }
}
