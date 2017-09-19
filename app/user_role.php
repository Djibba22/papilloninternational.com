<?php

namespace PapillonInternational;

use Illuminate\Database\Eloquent\Model;

class User_role extends Model
{
    public function user() {
        return $this->belongsTo('PapillonInternational\User');
    }
}
