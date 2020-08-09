<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\Player;
use App\Clublist;

class DetailClub extends Component
{
    public $players;
    public $team;

    public function mount($id)
    {
        $this->players = Player::where('club_list_id', $id)->get();
        $this->team = Clublist::where('id', $id)->first();
    }

    public function render()
    {
        return view('livewire.frontend.detail-club');
    }
}
