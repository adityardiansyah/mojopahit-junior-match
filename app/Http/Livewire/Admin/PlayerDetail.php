<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Player;

class PlayerDetail extends Component
{
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
    public $assist = 0;
    public $goal = 0;
    public $name_team;
    public $logo_team;
    public $age_team;
    public $address_team;
    public $player_id;

    public function mount($id)
    {
        $data = Player::find($id);
        $this->player_id = $data['id'];
        $this->name = $data['name'];
        $this->nickname = $data['nickname'];
        $this->address = $data['address'];
        $this->phone = $data['phone'];
        $this->back_number = $data['back_number'];
        $this->date_born = date('d-m-Y', strtotime($data['date_born']));
        $this->from_school = $data['from_school'];
        $this->photo = $data['photo'];
        $this->club_list_id = $data['club_list_id'];
        $this->position = $data['position'];
        $this->assist = empty($data['assist'])? '0': $data['assist'];
        $this->goal = empty($data['goal'])? '0': $data['goal'];
        $this->logo_team = $data->club->logo;
        $this->name_team = $data->club->name;
        $this->age_team = $data->club->age_level;
        $this->address_team = $data->club->address;
    }

    public function render()
    {
        return view('livewire.admin.player-detail');
    }

}
