<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function articles() {
        return $this->belongsToMany(Article::class); //2.argüman olarak laravel otomatik olarak user_id'yi alır.
    }
}
 