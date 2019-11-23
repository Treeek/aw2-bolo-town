<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $dates = [
        'acceptance_date',
    ];

    public function labs()
    {
        return $this->belongsToMany('App\Lab', 'applications_instalations');
    }
}
