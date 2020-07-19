<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Category;

class CategoryEdit extends Component
{
    public $category_id;
    public $parent_id;
    public $name;
    public $slug;

    protected $listeners = ['editKategori' => 'handleEditKategori'];

    public function render()
    {
        return view('livewire.admin.category-edit',[
            'getCategory' => Category::get()
        ]);
    }

    public function handleEditKategori($data)
    {
        $this->category_id = $data['id'];
        $this->parent_id = $data['parent_id'];
        $this->name = $data['name'];
        $this->slug = $data['slug'];
    }

    public function update()
    {
        if($this->category_id){
            $data = Category::find($this->category_id);
            $data->update([
                'parent_id' => $this->parent_id,
                'name' => $this->name,
                'slug' => $this->slug
            ]);
        }
        $this->resetInput();
        $this->emit('updatedCategory');
    }

    public function resetInput()
    {
        $this->parent_id = null;
        $this->name = null;
        $this->slug = null;
    }
}
