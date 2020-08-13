<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\Player;
use App\ClubList;
use App\Video;

class DetailClub extends Component
{
    public $players;
    public $team;
    public $video;

    public function mount($id)
    {
        $this->players = Player::where('club_list_id', $id)->get();
        $this->video = Video::where('team_id', $id)->orWhere('team2_id', $id)->get();
        $this->team = ClubList::where('id', $id)->first();
    }

    public function render()
    {
        return view('livewire.frontend.detail-club');
    }
}
