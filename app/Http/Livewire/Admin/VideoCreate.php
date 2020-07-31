<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\ClubList as Team;
use App\Video;

class VideoCreate extends Component
{
    public $title;
    public $embed;
    public $team_id;
    public $team2_id;

    public function render()
    {
        return view('livewire.admin.video-create', [
            'team' => Team::orderBy('name', 'asc')->get()
        ]);
    }

    public function store()
    {
        $validatedData = $this->validate([
            'title' => 'required',
            'team_id' => 'required',
            'team2_id' => 'required',
            'embed' => 'required',
        ]);

        $data = Video::create([
            'title' => $this->title,
            'embed' => $this->embed,
            'team_id' => $this->team_id,
            'team2_id' => $this->team2_id
        ]);

        $this->resetInput();
        $this->emit('storeVideo', $data);
    }

    public function resetInput()
    {
        $this->title = null;
        $this->embed = null;
        $this->team_id = null;
        $this->team2_id = null;
    }
}
