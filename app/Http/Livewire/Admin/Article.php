<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\Session;

class Article extends Component
{

    public function mount()
    {
        Session::put('menu_active', 'article');
    }
    public function render()
    {
        return view('livewire.admin.article');
    }
}
