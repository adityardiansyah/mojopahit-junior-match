<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\Session;


class Dashboard extends Component
{
    public function mount()
    {
        Session::put('menu_active', 'dashboard');
    }

    public function render()
    {
        return view('livewire.admin.dashboard');
    }
}
