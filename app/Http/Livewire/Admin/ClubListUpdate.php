<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\ClubList;

class ClubListUpdate extends Component
{
    use WithFileUploads;

    public $club_id;
    public $name;
    public $address;
    public $age_level;
    public $logo;
    public $edit_logo;
    public $cover;
    public $edit_cover;
    public $assistant_name;
    public $assistant_number;
    public $assistant_email;
    public $assistant_level;
    public $assistant_photo;
    public $edit_assistant_photo;

    public function mount($id)
    {
        $club = ClubList::find($id);
        
        if($club){
            $this->club_id = $club['id'];
            $this->name = $club['name'];
            $this->address = $club['address'];
            $this->age_level = $club['age_level'];
            $this->logo = $club['logo'];
            $this->cover = $club['cover'];
            $this->assistant_name = $club['assistant_name'];
            $this->assistant_number = $club['assistant_number'];
            $this->assistant_email = $club['assistant_email'];
            $this->assistant_level = $club['assistant_level'];
            $this->assistant_photo = $club['assistant_photo'];
        }
    }
    public function render()
    {
        return view('livewire.admin.club-list-update');
    }

    public function update()
    {
        $data = ClubList::find($this->club_id);

        if($this->club_id){
            $imageLogo = $this->update_image($this->logo, $this->edit_logo, $data->logo, 'edit_logo','logo');
            $imageCover = $this->update_image($this->cover, $this->edit_cover, $data->cover, 'edit_cover','cover');
            $imagePhoto = $this->update_image($this->assistant_photo, $this->edit_assistant_photo, $data->assistant_photo, 'edit_assistant_photo','assistant_photo');


            $data->update([
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
        }

        //flash message
        session()->flash('message', array('type' => 'success', 'content' => 'Data berhasil diedit'));

        //redirect
        return redirect()->route('admin.list-club');
    }
    
    public function update_image($model_name, $model_edit, $url_image, $name_input, $folder)
    {
        $image = $model_name;
        if($model_edit){
            $this->validate([
                ''.$name_input.'' => 'image|mimes:jpeg,png,jpg|max:1024'
            ]);
            $image = $model_edit->store("".$folder."",'public');
            $url = storage_path('app/public/'.$url_image);

            if(is_file($url)){
                unlink($url);
            }
        }
        return $image;
    }
}
