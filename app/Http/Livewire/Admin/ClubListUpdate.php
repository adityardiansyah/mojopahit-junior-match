<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\ClubList;

class ClubListUpdate extends Component
{
    public $club_id;
    public $name;
    public $address;
    public $age_level;
    public $logo;
    public $cover;
    public $assistant_name;
    public $assistant_number;
    public $assistant_email;
    public $assistant_level;
    public $assistant_photo;

    public function mount($id)
    {
        $club = ClubList::find($id);
        
        if($club){
            $this->club_id = $club['id'];
            $this->name = $club['name'];
            $this->address = $club['address'];
            $this->age_level = $club['age_level'];
            $this->logo = $club['logo'];
            $this->cover = $club['cover'];
            $this->assistant_name = $club['assistant_name'];
            $this->assistant_number = $club['assistant_number'];
            $this->assistant_email = $club['assistant_email'];
            $this->assistant_level = $club['assistant_level'];
            $this->assistant_photo = $club['assistant_photo'];
        }
    }
    public function render()
    {
        return view('livewire.admin.club-list-update');
    }

    public function update()
    {
        $data = ClubList::find($this->club_id);

        if($this->club_id){
            $imageCover = empty(request()->file('cover'))? $this->cover : $this->cover->store("cover",'public');
            $imageLogo = empty(request()->file('logo'))? $this->logo : $this->logo->store("logo",'public');
            $imagePhoto = empty(request()->file('assistant_photo'))? $this->assistant_photo : $this->assistant_photo->store("assistant_photo",'public');
    
            $data->update([
                'name' => $this->name,
                'address' => $this->address,
                'age_level' => $this->age_level,
                'logo' => $imageLogo,
                'cover' => $imageCover,
                'assistant_name' => $this->assistant_name,
                'assistant_number' => $this->assistant_number,
                'assistant_email' => $this->assistant_email,
                'assistant_level' => $this->assistant_level,
                'assistant_photo' => $imagePhoto
            ]);
        }

        //flash message
        session()->flash('message', array('type' => 'success', 'content' => 'Data berhasil diedit'));

        //redirect
        return redirect()->route('admin.list-club');
    }
}
