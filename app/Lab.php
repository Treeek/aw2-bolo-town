<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'labs';

    public function applications()
    {
        return $this->belongsToMany('App\Application', 'applications_instalations');
    }
}
