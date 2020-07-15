<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\ClubList;
use App\Player;
use Livewire\WithFileUploads;

class PlayerCreate extends Component
{
    use WithFileUploads;
    public $name;
    public $nickname;
    public $address;
    public $phone;
    public $back_number;
    public $date_born;
    public $from_school;
    public $photo;
    public $club_list_id;
    public $position;
    public $team_id;

    public function mount()
    {
        $id = request()->query('id');
        $this->team_id = empty(request()->query('id'))? '' : ClubList::find($id);
    }
    public function render()
    {
        return view('livewire.admin.player-create', [
            'team' => ClubList::latest()->get()
        ]);
    }

    public function store()
    {
        $photo = "";
        if($this->photo){
            $validatedData = $this->validate([
                'photo' => 'image|mimes:jpeg,png,jpg|max:1024'
            ]);
            $photo = $this->photo->store("photo",'public');
        }

        $data = Player::create([
            'club_list_id' => empty($this->team_id)? $this->club_list_id : $this->team_id->id,
            'name' => $this->name,
            'nickname' => $this->nickname,
            'address' => $this->address,
            'phone' => $this->phone,
            'position' => $this->position,
            'back_number' => $this->back_number,
            'date_born' => date('Y-m-d', strtotime($this->date_born)),
            'from_school' => $this->from_school,
            'photo' => $photo,
        ]);

        //flash message
        session()->flash('message', array('type' => 'success', 'content' => 'Data berhasil disimpan'));

        //redirect
        return redirect()->route('admin.players');
    }
}
