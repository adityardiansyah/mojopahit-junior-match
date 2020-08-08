<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\Page;

class Footer extends Component
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

    public function mount()
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
        }
    }

    public function render()
    {
        return view('livewire.frontend.footer');
    }
}
