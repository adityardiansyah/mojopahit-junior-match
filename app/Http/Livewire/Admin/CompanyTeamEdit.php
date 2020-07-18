<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\CompanyTeam as Team; 
use Livewire\WithFileUploads;

class CompanyTeamEdit extends Component
{
    use WithFileUploads;

    public $name;
    public $position;
    public $image;
    public $team_id;
    public $imageUpdate;

    protected $listeners = ['getTeam' => 'showTeam'];

    
    public function render()
    {
        return view('livewire.admin.company-team-edit');
    }

    public function update()
    {
        $cek = Team::find($this->team_id);
        
        if($this->team_id){
            $image = $this->image;
            if($this->imageUpdate){
                $validatedData = $this->validate([
                    'imageUpdate' => 'image|mimes:jpeg,png,jpg|max:1024'
                ]);
                $image = $this->imageUpdate->store("photo_company_team",'public');
                $url = storage_path('app/public/'.$cek->image);
                
                if(is_file($url)){
                    unlink($url);
                }
            }
            
            $cek->update([
                'name' => $this->name,
                'position' => $this->position,
                'image' => $image
            ]);
            $this->resetInput();
            
            $this->emit('updated', $cek);
        }

    }

    public function showTeam($data)
    {
        $this->team_id = $data['id'];
        $this->name = $data['name'];
        $this->position = $data['position'];
        $this->image = $data['image'];
    }

    public function resetInput()
    {
        $this->name = null;
        $this->position = null;
        $this->image = null;
    }
}
