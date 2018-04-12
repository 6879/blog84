<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\Users as Authenticatable;


class Users extends Model
{
	use Notifiable;
     protected $table="users";
      protected $primarykey="id";
      // protected $primarykey="catstatus";
       protected $fillable=['name',
       'email',
       'password',
              'image'
              ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
               protected $hidden = [
        'password', 'remember_token',
    ];
}