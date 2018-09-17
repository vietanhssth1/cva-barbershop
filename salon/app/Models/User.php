<?php

namespace App\Models;

use Cartalyst\Sentinel\Users\EloquentUser as CartalystUser;

class User extends CartalystUser
{
/*     public function posts(){
        return $this->belongsTo('App\Posts','user_id','id');
    } */

    protected $fillable = [
        'username', /* i added this */
        'email',
        'password',
        'avatar', /* i added this */
    ];
}
