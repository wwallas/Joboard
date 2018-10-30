<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\Http\Controllers\FavoritesController;

class Favorites extends Model
{
    protected $fillable = ['user_id','url','title','company', ];
    protected $casts =[
                'jobs'=>'array',

    ];
    
    public function Favorites() {
        return $this->HasOne(User::class);
    }

    
    
}
