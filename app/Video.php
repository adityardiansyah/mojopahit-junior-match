<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = ['title','embed','status','team_id','team2_id'];

    public function team()
    {
        return $this->hasOne('App\ClubList','id', 'team_id')->withDefault([
                'name' => 'Tidak Ada Team',
            ]);
    }

    public function team2()
    {
        return $this->hasOne('App\ClubList','id', 'team2_id')->withDefault([
                'name' => 'Tidak Ada Team',
            ]);
    }
}
