<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //$project->user
    public function user() {
        return $this->belongsTo(User::class); //select * from user where project_id = 1
    }
}
