<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Page;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use Livewire\WithFileUploads;


class PageContact extends Component
{
    use WithFileUploads;

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
    public $poster;
    public $v_poster;
    public $landing_video;
    public $meta_keyword;
    public $meta_description;

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
            $this->address = empty($slice['address'])? '' : $slice['address'];
            $this->address2 = empty($slice['address2'])? '' : $slice['address2'];
            $this->landing_video = empty($slice['landing_video'])? '' : $slice['landing_video'];
            $this->v_poster = empty($slice['poster'])? '' : $slice['poster'];
            $this->meta_keyword = empty($slice['meta_keyword'])? '' : $slice['meta_keyword'];
            $this->meta_description = empty($slice['meta_description'])? '' : $slice['meta_description'];
        }
    }

    public function render()
    {
        return view('livewire.admin.page-contact');
    }

    public function store()
    {
        $image = "";
        if($this->poster){
            $this->validate([
                'poster' => 'image|mimes:jpeg,png,jpg|max:2048',
            ],
            [
                'poster.image' => 'Harus bentuk Gambar',
                'poster.mimes' => 'Gambar harus bentuk jpeg, png, jpg',
                'poster.max' => 'Maksimal Gambar berukuran 5MB' 
            ]);
            $image = $this->poster->store("poster",'public');
        }

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
            'address' => $this->address,
            'address2' => $this->address2,
            'landing_video' => $this->landing_video,
            'poster' => $image,
            'meta_keyword' => $this->meta_keyword,
            'meta_description' => $this->meta_description,
        ];
        $data->update([
            'description' => json_encode($description),
        ]);

        //flash message
        session()->flash('message', array('type' => 'success', 'content' => 'Data berhasil disimpan'));
    }
}
