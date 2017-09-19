<?php

namespace PapillonInternational;

use Illuminate\Database\Eloquent\Model;
use PapillonInternational\User;

class Tours extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function user()
    {
        return $this
            ->belongsTo('PapillonInternational\User');
    }
}
