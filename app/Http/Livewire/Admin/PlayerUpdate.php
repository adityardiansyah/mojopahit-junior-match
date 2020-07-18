<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\ClubList;
use App\Player;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class PlayerUpdate extends Component
{
    use WithFileUploads;
    public $player_id;
    public $name;
    public $nickname;
    public $address;
    public $phone;
    public $back_number;
    public $date_born;
    public $from_school;
    public $photo;
    public $club_list_id;
    public $position;
    public $team;
    public $uploadPhoto;

    public function mount($id)
    {
        $data = Player::find($id);
        if($data){
            $this->player_id = $data['id'];
            $this->name = $data['name'];
            $this->nickname = $data['nickname'];
            $this->address = $data['address'];
            $this->phone = $data['phone'];
            $this->back_number = $data['back_number'];
            $this->date_born = date('d-m-Y', strtotime($data['date_born']));
            $this->photo = $data['photo'];
            $this->club_list_id = $data['club_list_id'];
            $this->position = $data['position'];
            $this->from_school = $data['from_school'];
        }
        $this->team = ClubList::latest()->get();
    }

    public function render()
    {
        return view('livewire.admin.player-update');
    }

    public function uploadPhoto()
    {
        $this->validate([
            'photo' => 'image|mimes:jpeg,png,jpg|max:1024'
        ]);
    }
    
    public function update()
    {
        $check = Player::find($this->player_id);
        if($this->player_id){
            $photo = $this->photo;
            if($this->uploadPhoto){
                $validatedData = $this->validate([
                    'uploadPhoto' => 'image|mimes:jpeg,png,jpg|max:1024'
                ]);
                $photo = $this->uploadPhoto->store("photo_player",'public');
                $url = storage_path('app/public/'.$check->photo);
                
                if(is_file($url)){
                    unlink($url);
                }
            }

            $check->update([
                'club_list_id' => $this->club_list_id,
                'name' => $this->name,
                'nickname' => $this->nickname,
                'address' => $this->address,
                'phone' => $this->phone,
                'position' => $this->position,
                'back_number' => $this->back_number,
                'date_born' => date('Y-m-d', strtotime($this->date_born)),
                'from_school' => $this->from_school,
                'photo' => $photo,
            ]);

            //flash message
            session()->flash('message', array('type' => 'success', 'content' => 'Data berhasil diedit'));

            //redirect
            return redirect()->route('admin.players');
        }
    }
}
