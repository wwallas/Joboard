<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\Http\Controllers\FavoritesController;

class FavoritesModel extends Model
{
    protected $fillable =['user_id', ];
    protected $casts =[
                'jobs'=>'array',

    ];
    
    public function Favorites() {
        return $this->HasOne(User::class);
    }

    
    
}
