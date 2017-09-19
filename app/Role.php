<?php

namespace PapillonInternational;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //Relationship for the User model
    public function users()
    {
        return $this
            ->belongsToMany('App\User')
            ->withTimestamps();
    }
}
