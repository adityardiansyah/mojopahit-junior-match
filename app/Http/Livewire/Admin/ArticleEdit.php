<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Category;
use App\Post;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Auth;

class ArticleEdit extends Component
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
    public $imageEdited;
    public $post_id;
 
    public function render()
    {
        return view('livewire.admin.article-edit', [
            'category' => Category::orderBy('name','asc')->get()
        ]);
    }

    public function mount($id)
    {
        $data = Post::find($id);

        $this->post_id = $data['id'];
        $this->title = $data['title'];
        $this->user_id = $data['user_id'];
        $this->category_id = $data['category_id'];
        $this->description = $data['description'];
        $this->slug = $data['slug'];
        $this->image = $data['image'];
        $this->meta_description = $data['meta_description'];
        $this->meta_keyword = $data['meta_keyword'];
        $this->meta_title = $data['meta_title'];
        $this->status = $data['status'];
        $this->published_at = $data['published_at'];
    }

    public function update()
    {
        $cek = Post::find($this->post_id);

        if($cek){
            $image = $this->image;
            if($this->imageEdited){
                $validatedData = $this->validate([
                    'imageEdited' => 'image|mimes:jpeg,png,jpg|max:1024'
                ]);
                $image = $this->imageEdited->store("post",'public');
                $url = storage_path('app/public/'.$cek->image);
                
                if(is_file($url)){
                    unlink($url);
                }
            }

            $cek->update([
                'title' => $this->title,
                'user_id' => $this->user_id,
                'category_id' => $this->category_id,
                'description' => $this->description,
                'slug' => $this->slug,
                'image' => $image,
                'meta_description' => $this->meta_description,
                'meta_keyword' => $this->meta_keyword,
                'meta_title' => $this->meta_title,
                'status' => $this->status,
                'published_at' => $this->published_at
            ]); 

            //flash message
            session()->flash('message', array('type' => 'success', 'content' => 'Data berhasil diedit'));

            //redirect
            return redirect()->route('admin.article');
        }else{
            //flash message
            session()->flash('message', array('type' => 'error', 'content' => 'Data gagal diedit'));

            //redirect
            return redirect()->route('admin.article');
        }
    }
}
