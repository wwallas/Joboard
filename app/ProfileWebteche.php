<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Webtechno;

class ProfileWebteche extends Model
{
    public $fillable = ['user_id', 'webtechno_id'];

    public function user(){
        return $this->belongsToMany(User::class);
    }

    public function Webtechno(){
        return $this->belongsToMany(Webtechno::class);
    }
}
