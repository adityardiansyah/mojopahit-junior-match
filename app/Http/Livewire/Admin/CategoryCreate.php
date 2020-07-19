<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Category;
use Illuminate\Support\Str;

class CategoryCreate extends Component
{
    public $parent_id;
    public $name;
    public $slug;

    public function render()
    {
        return view('livewire.admin.category-create', [
            'getCategory' => Category::get()
        ]);
    }

    public function store()
    {
        Category::create([
            'parent_id' => $this->parent_id,
            'name' => $this->name,
            'slug' => empty($this->slug)? Str::slug($this->name) : $this->slug
        ]); 
        $this->emit('storedCategory');
        $this->resetInput();
    }
    public function resetInput()
    {
        $this->parent_id = null;
        $this->name = null;
        $this->slug = null;
    }
}
