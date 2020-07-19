<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['parent_id','name','slug'];

    public function children()
    {
        return $this->hasMany('App\Category','parent_id', 'id');
    }

    public function parent()
    {
        return $this->hasOne('App\Category','id', 'parent_id')->withDefault([
                'name' => 'Tidak Ada',
            ]);;
    }
}
