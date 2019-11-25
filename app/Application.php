<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $dates = [
        'updated_at',
        'created_at'
    ];

    protected $hidden = [
        'updated_at',
        'created_at',
        'pivot'
    ];

    protected $fillable = [
        "name",
        "version",
        "link",
        "justification",
        "os",
        "teacher_name",
        "licence_expiration_date",
        "acceptance_date"
    ];


    public function labs()
    {
        return $this->belongsToMany('App\Lab', 'applications_instalations');
    }
}
