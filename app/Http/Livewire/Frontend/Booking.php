<?php

namespace App\Http\Livewire\Frontend;

use App\Booking as AppBooking;
use Livewire\Component;

class Booking extends Component
{
    public $name, $category = 'SSB', $phone, $date, $time_start, $time_end, $lapangan='Lapangan 1', $info = [], $showInfo = false;

    public function info()
    {
        $this->showInfo = TRUE;
        $this->info = AppBooking::where('date', $this->date)->get();
    }

    public function render()
    {
        return view('livewire.frontend.booking');
    }

    public function store()
    {
        $validatedData = $this->validate(
            [
                'name' => 'required',
                'category' => 'required',
                'phone' => 'required',
                'date' => 'required',
                'time_start' => 'required',
                'time_end' => 'required',
            ],
            [
                'image.required' => 'Nama Penyewa Harus diisi!',
                'category.required' => 'Kategori Penyewa Harus diisi!',
                'phone.required' => 'Nomor Telepon Penyewa Harus diisi!',
                'date.required' => 'Tanggal Harus diisi!',
                'time_start.required' => 'Waktu Mulai Penyewa Harus diisi!',
                'time_end.required' => 'Waktu Selesai Penyewa Harus diisi!',
                'lapangan.required' => 'Lapangan Harus diisi!',
            ]
        );
        AppBooking::create([
            'name' => $this->name,
            'category' => $this->category,
            'phone' => $this->phone,
            'date' => date('Y-m-d',strtotime($this->date)),
            'time_start' => $this->time_start,
            'time_end' => $this->time_end,
            'lapangan' => $this->lapangan,
            'status' => "Pending",
        ]);

        $this->resetInput();
        session()->flash('message', array('type' => 'success', 'content' => 'Booking Lapangan berhasil dikirim'));
    }

    public function resetInput()
    {
        $this->name = null;
        $this->phone = null;
        $this->date = null;
        $this->time_start = null;
        $this->time_end = null;
    }
}
