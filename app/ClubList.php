<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClubList extends Model
{
    protected $fillable = ['name', 'address','age_level','logo','cover','assistant_name','assistant_number','assistant_email','assistant_level','assistant_photo'];
}
