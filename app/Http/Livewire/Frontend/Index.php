<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\Post;
use App\Video;
use App\Gallery;
use App\Page;

class Index extends Component
{
    public $phone;
    public $phone2;
    public $whatsapp;
    public $whatsapp2;
    public $email;
    public $email2;
    public $youtube;
    public $facebook;
    public $instagram;
    public $address;
    public $address2;
    public $v_poster;
    public $landing_video;
    public $meta_keywords;
    public $meta_description;

    public function render()
    {
        $data = Page::where('type', 'contact')->first();
        if($data){
            $slice = json_decode($data['description'], true);
            $this->phone = empty($slice['phone'])? '' : $slice['phone'];
            $this->phone2 = empty($slice['phone2'])? '' : $slice['phone2'];
            $this->whatsapp = empty($slice['whatsapp'])? '' : $slice['whatsapp'];
            $this->whatsapp2 = empty($slice['whatsapp2'])? '' : $slice['whatsapp2'];
            $this->email = empty($slice['email'])? '' : $slice['email'];
            $this->email2 = empty($slice['email2'])? '' : $slice['email2'];
            $this->instagram = empty($slice['instagram'])? '' : $slice['instagram'];
            $this->youtube = empty($slice['youtube'])? '' : $slice['youtube'];
            $this->facebook = empty($slice['facebook'])? '' : $slice['facebook'];
            $this->address = empty($slice['address'])? '' : $slice['address'];
            $this->address2 = empty($slice['address2'])? '' : $slice['address2'];
            $this->landing_video = empty($slice['landing_video'])? '' : $slice['landing_video'];
            $this->v_poster = empty($slice['poster'])? '' : $slice['poster'];
            $this->meta_keywords = empty($slice['meta_keyword']) ? '' : $slice['meta_keyword'];
            $this->meta_description = empty($slice['meta_description']) ? '' : $slice['meta_description'];
        }

        return view('livewire.frontend.index', [
            'artikel' => Post::where('status','PUBLISH')->latest()->limit(4)->get(),
            'trending' => Post::where('status','PUBLISH')->orderBy('view', 'desc')->limit(5)->get(),
            'video' => Video::latest()->limit(3)->get(),
            'galeri' => Gallery::latest()->limit(6)->get()
        ]);
    }
}
