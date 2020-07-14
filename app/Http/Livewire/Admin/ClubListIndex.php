<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\ClubList;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Session;

class ClubListIndex extends Component
{
    use WithPagination;
    public $countData;
    public $paginate = 10;
    public $search;

    public function mount()
    {
        Session::put('menu_active', 'clublist');

        $this->countData = ClubList::get()->count();
    }
    public function render()
    {
        return view('livewire.admin.club-list-index', [
            'data' => ($this->search == '')? 
            ClubList::latest()->paginate($this->paginate) :
            ClubList::where('name', 'LIKE', '%'.$this->search.'%')->paginate($this->paginate)
            ]);
    }

    public function edit($id)
    {
        return redirect()->route('admin.list-club-edit', $id);
    }

    public function delete($id)
    {
        if($id){
            $data = ClubList::find($id);
            $data->delete();    
            //flash message
            session()->flash('message', array('type' => 'success', 'content' => 'Data berhasil dihapus!'));
            //redirect
            return redirect()->route('admin.list-club');
        }
    }
}
