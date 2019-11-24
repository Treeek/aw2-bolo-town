<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $dates = [
        'acceptance_date',
    ];

    protected $fillable = [
        "name",
        "version",
        "link",
        "justification",
        "os",
        "licence_expiration_date",
        "acceptance_date",
        "teacher_name"
    ];


    public function labs()
    {
        return $this->belongsToMany('App\Lab', 'applications_instalations');
    }
}
