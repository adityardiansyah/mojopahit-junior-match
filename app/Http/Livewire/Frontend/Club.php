<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\ClubList;

class Club extends Component
{
    public $search;
    public $filter;

    public function render()
    {
        $get_tahun = ClubList::selectRaw('YEAR(created_at) as tahun')->orderBy('tahun','desc')->groupBy('tahun')->get();
        return view('livewire.frontend.club',[
            'club' => ($this->filter != null) ? ($this->search == null)? ClubList::whereYear('created_at', $this->filter)->get() : ClubList::whereYear('created_at', $this->filter)->where('name','LIKE','%'.$this->search.'%')->get() : ClubList::whereYear('created_at', date('Y'))->get(),
            'get_tahun' => $get_tahun
        ]);
    }
}
