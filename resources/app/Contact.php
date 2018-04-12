<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    
     protected $table="contacts";
      protected $primarykey="id";
      //protected $incrementing=false;
      // protected $primarykey="catstatus";
       protected $fillable=['firstname',
       'lastname',
       'email',
       'message'
       

              ];
}
