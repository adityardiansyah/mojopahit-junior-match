<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Slider as Slide;
use Illuminate\Support\Facades\Session;

class Slider extends Component
{
    public $statusUpdate = false;
    protected $listeners = [
        'storeSlider' => 'handleStoreSlider',
        'delete' => 'handleDeleteSlider',
        'editSlider' => 'handleEditSlider'
    ];

    public function mount()
    {
        Session::put('menu_active', 'slider');
    }

    public function render()
    {
        return view('livewire.admin.slider', [
            'data' => Slide::latest()->get()
        ]);
    }


    public function handleStoreSlider()
    {
        session()->flash('message', array('type' => 'success', 'content' => 'Data berhasil disimpan'));
    }

    public function handleDeleteSlider($id)
    {
        if($id){
            try{
                $data = Slide::find($id);
                $url = storage_path('app/public/'.$data->image);
            
                if(is_file($url)){
                    unlink($url);
                }
                $data->delete();
                session()->flash('message', array('type' => 'success', 'content' => 'Data berhasil dihapus'));
            }catch(\Exception $e){
                session()->flash('message', array('type' => 'error', 'content' => 'Data gagal dihapus'));
            }
        }
    }

    public function edit($id)
    {
        if($id){
            $this->statusUpdate = true;
            $cek = Slide::find($id);
            $this->emit('dataEditSlider', $cek);
        }
    }

    public function handleEditSlider()
    {
        session()->flash('message', array('type' => 'success', 'content' => 'Data berhasil diedit'));
    }
}
