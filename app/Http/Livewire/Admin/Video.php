<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Video as Videos;
use Illuminate\Support\Facades\Session;

class Video extends Component
{
    public $statusUpdate = false;

    protected $listeners = [
        'storeVideo' => 'handleStoreVideo',
        'delete' => 'handleDeleteVideo',
        'editGallery' => 'handleEditGallery'
    ];

    public function mount()
    {
        Session::put('menu_active', 'video');
    }

    public function render()
    {
        return view('livewire.admin.video', [
            'data' => Videos::latest()->get()
        ]);
    }

    public function handleStoreVideo()
    {
        session()->flash('message', array('type' => 'success', 'content' => 'Data berhasil disimpan'));
    }

    public function handleDeleteVideo($id)
    {
        if($id){
            $cek = Videos::find($id);
            $cek->delete();
            session()->flash('message', array('type' => 'success', 'content' => 'Data berhasil dihapus'));
        }
    }

    public function edit($id)
    {
        $cek = Videos::find($id);
        if($cek){
            $this->statusUpdate = true;
            $this->emit('dataEditVideo', $cek);
        }
    }

    public function handleEditGallery()
    {
        session()->flash('message', array('type' => 'success', 'content' => 'Data berhasil diedit'));
    }
}
