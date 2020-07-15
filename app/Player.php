<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = ['name','nickname','club_list_id','back_number','date_born','phone','from_school','address','photo','position'];

    public function club()
    {
        return $this->belongsTo('App\ClubList', 'club_list_id', 'id');
    }
    
}
