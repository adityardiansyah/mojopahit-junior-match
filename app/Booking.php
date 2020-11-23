<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'booking';

    protected $fillable = ['name','category','phone','date','time_start','time_end','lapangan','status'];
}
