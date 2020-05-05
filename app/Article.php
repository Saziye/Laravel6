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
}
