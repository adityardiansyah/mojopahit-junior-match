<?php

namespace App\Http\Livewire\Admin;

use App\Booking as AppBooking;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Livewire\WithPagination;

class Booking extends Component
{
    use WithPagination;

    public $countData = 0;
    public $paginate = 10;
    public $search = "";
    public $date = "";

    protected $listeners = ['konfirmasi' => 'handleKonfirmasi'];

    public function mount()
    {
        Session::put('menu_active', 'booking');
        $this->countData = AppBooking::get()->count();
    }

    public function render()
    {
        $data = AppBooking::latest();
        if(!empty($this->search)){
            $data = $data->where('name', 'LIKE', '%' . $this->search . '%');
        }elseif(!empty($this->date)){
            $data = $data->where('date',date('Y-m-d', strtotime($this->date)));
        }
        $data = $data->paginate($this->paginate);
        return view('livewire.admin.booking', [
            'data' => $data
        ]);
    }

    public function handleKonfirmasi($id)
    {
        if($id){
            AppBooking::find($id)->update(['status'=>'Diterima']);
            session()->flash('message', array('type' => 'success', 'content' => 'Data berhasil dikonfirmasi'));
        }
        return redirect()->route('admin.booking');
    }

    public function edit($id)
    {
        if($id){
            return redirect()->route('admin.booking-edit', $id);
        }
    }
}
