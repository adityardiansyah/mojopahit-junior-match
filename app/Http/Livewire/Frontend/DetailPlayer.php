<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\Player;

class DetailPlayer extends Component
{
    public $player;

    public function mount($id)
    {
        $this->player = Player::find($id);
    }

    public function render()
    {
        return view('livewire.frontend.detail-player');
    }
}
