<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Gallery as Galeri;
use Illuminate\Support\Facades\Session;

class Gallery extends Component
{
    public $statusUpdate = false;
    protected $listeners = [
        'storeGalery' => 'handleStoreGalery',
        'delete' => 'handleDeleteGalery',
        'editGallery' => 'handleEditGalery',
        'deleteImageGallery' => 'handleDeleteImageGallery'
    ];

    public function mount()
    {
        Session::put('menu_active', 'gallery');
    }

    public function render()
    {
        $data = Galeri::latest()->get();
        foreach ($data as $key => $value) {
            $data[$key]->images = json_decode($value->image, TRUE);
        }
        return view('livewire.admin.gallery', [
            'data' => $data
        ]);
    }

    public function handleStoreGalery($data)
    {
        session()->flash('message', array('type' => 'success', 'content' => 'Data berhasil disimpan'));
    }

    public function handleDeleteGalery($id)
    {
        if($id){
            try{
                $data = Galeri::find($id);
                foreach (json_decode($data->image, TRUE) as $key => $value) {
                    $url = storage_path('app/public/'.$value);
                
                    if(is_file($url)){
                        unlink($url);
                    }
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
            $data = Galeri::find($id);
            $this->emit('dataEditGalery', $data);
        }
    }

    public function handleEditGalery()
    {
        $this->statusUpdate = false;
        session()->flash('message', array('type' => 'success', 'content' => 'Data berhasil diedit'));
    }

    public function handleDeleteImageGallery()
    {
        session()->flash('message', array('type' => 'success', 'content' => 'Gambar berhasil dihapus'));
    }
}
