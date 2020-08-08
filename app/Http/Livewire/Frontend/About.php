<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\Page;
use App\CompanyTeam;

class About extends Component
{
    public $image;
    public $description;
    public $url_maps;
    public $url_video;
    public $team;
    
    public function mount()
    {
        $this->team = CompanyTeam::get();
        $about = Page::where('type','about')->first();
        if($about){
            $slice = json_decode($about->description, true);
            $this->image = empty($about->image)? '': $about->image;
            $this->description = empty($slice['description'])? '' : $slice['description'];
            $this->url_maps = empty($slice['maps'])? '': $slice['maps'];
            $this->url_video = empty($slice['video'])? '': $slice['video'];
        }
    }
    public function render()
    {
        return view('livewire.frontend.about');
    }
}
