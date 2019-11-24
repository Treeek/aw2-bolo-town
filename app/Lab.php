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

    protected $fillable = [
        'name', 'qnt_computers'
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    public function applications()
    {
        return $this->belongsToMany('App\Application', 'applications_instalations');
    }
}
