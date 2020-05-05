<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //protected $fillable = ['title', 'excerpt', 'body']; //Article::create(request()->all())
    protected $guarded = [];

    public function path() {
        return route('articles.show', $this);
    }

    //$article->user
    public function user() {
        return $this->belongsTo(User::class); //2.argüman olarak laravel otomatik olarak user_id'yi alır.
    }

    // public function author() {
    //     return $this->belongsTo(User::class,'user_id'); //yukardaki ile aynı görevi yapar.
    // }

    public function tags() {
        return $this->belongsToMany(Tag::class)->withTimestamps(); //2.argüman olarak laravel otomatik olarak user_id'yi alır.
    }

}

//an article has many tags (article can have many tags)
//a tag belong to many article (tag can have many articles)
 
