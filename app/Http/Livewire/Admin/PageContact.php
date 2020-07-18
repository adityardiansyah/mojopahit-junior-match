<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Page;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;


class PageContact extends Component
{
    public $phone;
    public $whatsapp;
    public $email;

    public function mount()
    {
        Session::put('menu_active', 'contact');
        $data = Page::where('type', 'contact')->first();
        if($data){
            $slice = json_decode($data['description'], true);
            $phone = $slice['phone'];
            $whatsapp = $slice['whatsapp'];
            $email = $slice['email'];
            $this->phone = empty($phone)? '' : $phone;
            $this->whatsapp = empty($whatsapp)? '' : $whatsapp;
            $this->email = empty($email)? '' : $email;
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
            'whatsapp' => $this->whatsapp,
            'email' => $this->email
        ];
        $data->update([
            'description' => json_encode($description),
        ]);

        //flash message
        session()->flash('message', array('type' => 'success', 'content' => 'Data berhasil disimpan'));
    }
}
