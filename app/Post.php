<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','user_id','category_id','slug','description','image','status','meta_description','meta_keyword','meta_title','published_at'];

    public function user()
    {
        return $this->belongsTo('App\User','user_id','id');
    }

    public function category()
    {
        return $this->belongsTo('App\Category','category_id','id');
    }
}
