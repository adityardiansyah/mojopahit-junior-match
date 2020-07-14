<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\ClubList;

class PlayerCreate extends Component
{
    public function render()
    {
        return view('livewire.admin.player-create', [
            'team' => ClubList::latest()->get()
        ]);
    }
}
