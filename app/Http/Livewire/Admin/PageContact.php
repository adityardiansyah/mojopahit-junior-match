<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Page;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;


class PageContact extends Component
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

    public function mount()
    {
        Session::put('menu_active', 'contact');
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
        }
    }

    public function render()
    {
        return view('livewire.admin.page-contact');
    }

    public function store()
    {
        $data = Page::where('type', 'contact')->first();
        $description = [
            'phone' => $this->phone,
            'phone2' => $this->phone2,
            'whatsapp' => $this->whatsapp,
            'whatsapp2' => $this->whatsapp2,
            'email' => $this->email,
            'email2' => $this->email2,
            'instagram' => $this->instagram,
            'youtube' => $this->youtube,
            'facebook' => $this->facebook,
        ];
        $data->update([
            'description' => json_encode($description),
        ]);

        //flash message
        session()->flash('message', array('type' => 'success', 'content' => 'Data berhasil disimpan'));
    }
}
