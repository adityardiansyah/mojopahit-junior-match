<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\CompanyTeam as Team; 

class CompanyTeam extends Component
{
    use WithFileUploads;

    public $name;
    public $position;
    public $image;
    public $statusUpdate = FALSE;

    protected $listeners = ['delete', 'updated' => 'handleUpdated'];
    
    public function mount()
    {
        
    }

    public function render()
    {
        return view('livewire.admin.company-team', [
            'data' => Team::latest()->paginate(5)
        ]);
    }

    public function delete($id)
    {
        if($id){
            $data = Team::find($id);
            $url = storage_path('app/public/'.$data->image);
            
            if(is_file($url)){
                unlink($url);
            }
            $data->delete();
            //flash message
            session()->flash('message', array('type' => 'success', 'content' => 'Data berhasil dihapus'));
        }
    }

    public function edit($id)
    {
        $this->statusUpdate = TRUE;
        $data = Team::find($id);

        $this->emit('getTeam', $data);
    }

    public function handleUpdated()
    {
        //flash message
        session()->flash('message', array('type' => 'success', 'content' => 'Data berhasil diedit'));
    }

}
