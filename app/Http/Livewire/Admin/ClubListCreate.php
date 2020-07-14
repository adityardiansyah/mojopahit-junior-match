<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\ClubList;
use Livewire\WithFileUploads;

class ClubListCreate extends Component
{
    use WithFileUploads;
    
    public $name;
    public $address;
    public $age_level;
    public $logo;
    public $cover;
    public $assistant_name;
    public $assistant_number;
    public $assistant_email;
    public $assistant_level;
    public $assistant_photo;

    public function render()
    {
        return view('livewire.admin.club-list-create');
    }

    public function store()
    {
        $validatedData = $this->validate([
            'logo' => 'image|mimes:jpeg,png,jpg|max:1024',
            'cover' => 'image|mimes:jpeg,png,jpg|max:1024',
            'assistant_photo' => 'image|mimes:jpeg,png,jpg|max:1024'
        ]);
        $imageCover = $this->cover->store("cover",'public');
        $imageLogo = $this->logo->store("logo",'public');
        $imagePhoto = $this->assistant_photo->store("assistant_photo",'public');

        $data = ClubList::create([
            'name' => $this->name,
            'address' => $this->address,
            'age_level' => $this->age_level,
            'logo' => $imageLogo,
            'cover' => $imageCover,
            'assistant_name' => $this->assistant_name,
            'assistant_number' => $this->assistant_number,
            'assistant_email' => $this->assistant_email,
            'assistant_level' => $this->assistant_level,
            'assistant_photo' => $imagePhoto
        ]);

        //flash message
        session()->flash('message', array('type' => 'success', 'content' => 'Data berhasil disimpan'));

        //redirect
        return redirect()->route('admin.list-club');
    }
}
