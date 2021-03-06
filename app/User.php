<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //$user->articles
    public function articles() {
        return $this->hasMany(Article::class);//select * from articles where user_id = 1
    }

    //$user->projects
    public function projects() {
        return $this->hasMany(Project::class);//select * from project where user_id = 1
    }
}

//$user = USer::find(1); //select * from User where id = 1
//$user->projects; //select *from projects where user_id = $user->id
//$user->projects->find(),last,first,split(),groupBy