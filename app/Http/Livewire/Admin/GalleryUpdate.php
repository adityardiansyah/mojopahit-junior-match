<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Gallery;
use Livewire\WithFileUploads;

class GalleryUpdate extends Component
{
    use WithFileUploads;
    public $gallery_id;
    public $image;
    public $image_gallery = [];
    public $title;
    public $category;
    protected $listeners = [
        'dataEditGalery' => 'handleEditGalery'
    ];

    public function render()
    {
        return view('livewire.admin.gallery-update');
    }

    public function handleEditGalery($data)
    {
        $this->gallery_id = $data['id'];
        $this->title = $data['title'];
        $this->image_gallery = json_decode($data['image'], TRUE);
        $this->category = $data['category'];
    }

    public function deleteGallery($data, $id)
    {
        $check = Gallery::find($id);
        $arr_data = array($data);
        $data_galeri = json_decode($check->image, TRUE);
        
        if($check->image != null){
            if (($key = array_search($data, $data_galeri)) !== false) {
                $url = storage_path('app/public/'.$data);
                    
                if(is_file($url)){
                    unlink($url);
                    unset($data_galeri[$key]);
                    $data = [];
                    foreach ($data_galeri as $key => $value) {
                        array_push($data, $value);
                    }
                    $check->update(['image' => json_encode($data)]);
                }
            }
            session()->flash('message', array('type' => 'success', 'content' => 'Gambar berhasil dihapus'));
        }

        // $this->emit('deleteImageGallery');
    }


    public function update()
    {
        $check = Gallery::find($this->gallery_id);
        $image_db = (json_decode($check->image, TRUE) != null? json_decode($check->image, TRUE) : []);
        if($this->image){
            $validatedData = $this->validate([
                'image.*' => 'image|mimes:jpeg,png,jpg|max:2048',
            ]);
            foreach ($this->image as $key => $value) {
                $this->image[$key] = $value->store("galery",'public');
                if(is_array($image_db)){
                    array_push($image_db, $this->image[$key]);
                }
            }
        }
        if($check){
            $check->update([
                'title' => $this->title,
                'image' => json_encode($image_db),
                'category' => $this->category
            ]);
            $this->resetInput();
            
            $this->emit('editGallery');
        }
    }

    
    public function resetInput()
    {
        $this->title = null;
        $this->image = null;
        $this->image_gallery = null;
        $this->category = null;
    }
}
