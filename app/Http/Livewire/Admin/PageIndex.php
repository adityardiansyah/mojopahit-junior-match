<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class PageIndex extends Component
{
    public $page;

    public function mount($slug)
    {
        $this->page = $slug;
    }

    public function render()
    {
        return view('livewire.admin.page-index');
    }
}
