<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\Session;
use App\Post;

class Article extends Component
{
    public $paginate = 10;
    public $search;
    public $countData;

    protected $listeners = ['delete' => 'handleDelete'];

    public function mount()
    {
        Session::put('menu_active', 'article');
        $this->countData = Post::get()->count();
    }

    public function render()
    {
        return view('livewire.admin.article', [
            'data' => ($this->search == '')? Post::latest()->paginate($this->paginate) : Post::where('title','LIKE', '%'.$this->search.'%')->paginate($this->search) 
        ]);
    }

    public function edit($id)
    {
        return redirect()->route('admin.article-edit', $id);
    }

    public function handleDelete($id)
    {
        if($id){
            $data = Post::find($id);
            $url = storage_path('app/public/'.$data->image);
            
            if(is_file($url)){
                unlink($url);
            }
            $data->delete();
            //flash message
            session()->flash('message', array('type' => 'success', 'content' => 'Data berhasil dihapus'));
            return redirect()->route('admin.article');
        }
    }
}
