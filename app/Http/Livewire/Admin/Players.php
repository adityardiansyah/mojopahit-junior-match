<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\Session;
use App\Player;

class Players extends Component
{
    public $countData = 0;
    public $paginate = 10;

    public function mount()
    {
        Session::put('menu_active', 'players');
        $this->countData = Player::get()->count();
    }

    public function render()
    {
        return view('livewire.admin.players', [
            'data' => Player::latest()->paginate($this->paginate)
        ]);
    }
}
