<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\Session;
use App\Player;
use Livewire\WithPagination;

class Players extends Component
{
    use WithPagination;

    public $countData = 0;
    public $paginate = 10;
    public $search = "";
    public $delete_id;

    protected $listeners = ['delete'];

    public function mount()
    {
        Session::put('menu_active', 'players');
        $this->countData = Player::get()->count();
    }

    public function render()
    {
        return view('livewire.admin.players', [
            'data' => empty($this->search)? Player::latest()->paginate($this->paginate) : Player::where('name','LIKE','%'.$this->search.'%')->paginate($this->paginate)
        ]);
    }

    public function delete($id)
    {
        if($id){
            try{
                $data = Player::find($id);
                $url = storage_path('app/public/'.$data->photo);
            
                if(is_file($url)){
                    unlink($url);
                }
                $data->delete();

                session()->flash('message', array('type' => 'success', 'content' => 'Data berhasil dihapus!'));
                return redirect()->route('admin.players');
            }catch(\Exception $e){
                session()->flash('message', array('type' => 'error', 'content' => 'Data gagal dihapus!'));
                return redirect()->route('admin.players');
            }
        }
    }

    public function edit($id)
    {
        return redirect()->route('admin.player-edit', $id);
    }

    public function detail($player_id)
    {
        return redirect()->route('admin.player-detail', ['id' => $player_id]);
    }
}
