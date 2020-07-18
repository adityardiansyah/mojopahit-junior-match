<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\CompanyTeam as Team; 
use Livewire\WithFileUploads;

class CompanyTeamCreate extends Component
{
    use WithFileUploads;

    public $name;
    public $position;
    public $image;

    public function render()
    {
        return view('livewire.admin.company-team-create');
    }

    public function store()
    {
        $this->validate([
            'image' => 'image|mimes:jpeg,png,jpg|max:1024'
        ]);
        $image = $this->image->store("photo_company_team",'public');
        
        Team::create([
            'name' => $this->name,
            'position' => $this->position,
            'image' => $image
        ]);
        //flash message
        session()->flash('message', array('type' => 'success', 'content' => 'Data berhasil disimpan'));

        //redirect
        // return redirect()->route('admin.page-index','about');
    }
}
