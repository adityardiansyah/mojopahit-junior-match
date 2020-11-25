<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function get_booking($date)
    {
        try{
            $data = Booking::where('date',$date)->get();
            return response()->json(['error' => FALSE, 'data' => $data]);
        }catch(\Exception $e){
            return response()->json(['error' => TRUE, 'data' => $e->getMessage()]);
        }
    }
}
