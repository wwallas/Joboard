<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProfileWebteche;

class Webtechno extends Model
{
    protected $fillable = ['webtechno_id', 'description'];

    public function profileWebteche(){
        return $this->belongsToMany(ProfileWebteche::class);
    }
}
