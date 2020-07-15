<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\ClubList;
use App\Player;
use Livewire\WithFileUploads;

class PlayerUpdate extends Component
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
    public $team;

    public function mount($id)
    {
        $data = Player::find($id);
        if($data){
            $this->name = $data['name'];
            $this->nickname = $data['nickname'];
            $this->address = $data['address'];
            $this->phone = $data['phone'];
            $this->back_number = $data['back_number'];
            $this->date_born = date('d-m-Y', strtotime($data['date_born']));
            $this->photo = $data['photo'];
            $this->club_list_id = $data['club_list_id'];
            $this->position = $data['position'];
        }
        $this->team = ClubList::latest()->get();
    }

    public function render()
    {
        return view('livewire.admin.player-update');
    }
}
