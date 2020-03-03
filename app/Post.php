<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Post extends Model
{

    // untuk date, diubah menjadi instansi karbon
    protected $dates = ['created_at'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function thumbnail(){
        if($this->thumbnail){
            return $this->thumbnail;
        }else{
            return asset('frontend/img/b1.jpg');
        }
    }
}
