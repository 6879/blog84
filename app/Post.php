<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
     protected $table="posts";
      protected $primarykey="id";
      // protected $primarykey="catstatus";
       protected $fillable=['cat',
       'title',
       'body',
              'image',
              'author'];
}
