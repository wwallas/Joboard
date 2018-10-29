<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use FavoritesController;

class FavoritesModel extends Model
{
    protected $casts =[
                'jobs'=>'array',

    ];
    
    public function Favorites() {
        return $this->HasOne(User::class);
    }

    
    
}
