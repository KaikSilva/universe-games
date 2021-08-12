<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function Author()
    {
        return $this->hasOne(User::class , 'id' , 'author');
    }
}
