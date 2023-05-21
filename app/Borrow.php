<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    protected $table = "borrow";
    protected $guarded = [];

    public function user() 
    {
        return $this->belongsTo('App\User', 'id_user');

    }

    public function book() 
    {
        return $this->belongsTo('App\Book', 'id_book');

    }
}
