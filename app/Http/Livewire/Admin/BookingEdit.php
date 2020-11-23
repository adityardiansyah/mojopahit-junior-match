<?php

namespace App\Http\Livewire\Admin;

use App\Booking;
use Livewire\Component;

class BookingEdit extends Component
{
    public $name, $category, $phone, $date, $time_start, $time_end, $lapangan, $status, $booking_id;

    public function render()
    {
        return view('livewire.admin.booking-edit');
    }

    public function mount($id)
    {
        $data = Booking::find($id);
        $this->booking_id = $data['id'];
        $this->name = $data['name'];
        $this->category = $data['category'];
        $this->phone = $data['phone'];
        $this->date = $data['date'];
        $this->time_start = $data['time_start'];
        $this->time_end = $data['time_end'];
        $this->lapangan = $data['lapangan'];
        $this->status = $data['status'];
    }

    public function update()
    {
        $get_id = Booking::find($this->booking_id);
        if($get_id){
            $get_id = $get_id->update([
                'name' => $this->name,
                'category' => $this->category,
                'phone' => $this->phone,
                'date' => date('Y-m-d', strtotime($this->date)),
                'time_start' => $this->time_start,
                'time_end' => $this->time_end,
                'lapangan' => $this->lapangan,
                'status' => $this->status,
            ]);
            $this->emit('updatedBooking');

            //flash message
            session()->flash('message', array('type' => 'success', 'content' => 'Data berhasil diedit'));

            //redirect
            return redirect()->route('admin.booking');
        }else{
            //flash message
            session()->flash('message', array('type' => 'error', 'content' => 'Data gagal diedit'));

            //redirect
            return redirect()->route('admin.booking');
        }
    }
}
