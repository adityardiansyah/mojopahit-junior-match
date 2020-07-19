<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Category as Kategori;
use Illuminate\Support\Facades\Session;

class Category extends Component
{
    public $statusUpdate = FALSE;
    public $paginate = 10;
    public $search;

    protected $listeners = [
        'storedCategory' => 'handleStoredCategory',
        'updatedCategory' => 'handleUpdatedCategory',
        'delete' => 'handleDelete'
    ];
        
    public function mount()
    {
            Session::put('menu_active', 'category');
    }

    public function render()
    {
        return view('livewire.admin.category', [
            'data' => ($this->search == '')? Kategori::latest()->paginate($this->paginate) : Kategori::where('name','LIKE','%'.$this->search.'%')->paginate($this->paginate)
        ]);
    }

    public function handleStoredCategory()
    {
        //flash message
        session()->flash('message', array('type' => 'success', 'content' => 'Data berhasil disimpan'));
    }

    public function handleUpdatedCategory()
    {
        $this->statusUpdate = FALSE;
        session()->flash('message', array('type' => 'success', 'content' => 'Data berhasil diubah'));
    }

    public function edit($id)
    {
        $this->statusUpdate = TRUE;
        $data = Kategori::find($id);
        $this->emit('editKategori', $data);
    }

    public function handleDelete($id)
    {
        if($id){
            $data = Kategori::find($id);
            $cek_induk = Kategori::where('parent_id', $data->id)->first();
            if(empty($cek_induk)){
                $data->delete();

                session()->flash('message', array('type' => 'success', 'content' => 'Data berhasil dihapus'));
            }else{
                session()->flash('message', array('type' => 'error', 'content' => 'Data gagal dihapus, karena memiliki sub kategori'));
            }
        }
    }
    
}
