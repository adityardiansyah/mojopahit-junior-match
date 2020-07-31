<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\ClubList as Team;
use App\Video;

class VideoUpdate extends Component
{
    public $title;
    public $embed;
    public $team_id;
    public $team2_id;
    public $video_id;

    protected $listeners = [
        'dataEditVideo' => 'handleEditVideo'
    ];

    public function render()
    {
        return view('livewire.admin.video-update', [
            'team' => Team::orderBy('name', 'asc')->get()
        ]);
    }

    public function handleEditVideo($data)
    {
        $this->video_id = $data['id'];
        $this->title = $data['title'];
        $this->embed = $data['embed'];
        $this->team_id = $data['team_id'];
        $this->team2_id = $data['team2_id'];
    }

    public function update()
    {
        $check = Video::find($this->video_id);
        
        if($check){
            $check->update([
                'title' => $this->title,
                'embed' => $this->embed,
                'team_id' => $this->team_id,
                'team2_id' => $this->team2_id
            ]);
            $this->resetInput();
            $this->emit('editGallery');
        }
    }

    public function resetInput()
    {
        $this->title = null;
        $this->embed = null;
        $this->team_id = null;
        $this->team2_id = null;
    }
}
