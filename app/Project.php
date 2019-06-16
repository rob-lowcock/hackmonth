<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['name', 'repo', 'description', 'user_id', 'commit_days'];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
