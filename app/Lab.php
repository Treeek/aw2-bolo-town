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
        'created_at', 'updated_at', 'pivot'
    ];

    public function applications()
    {
        return $this->belongsToMany('App\Application', 'applications_instalations');
    }

    public static function doesLabHaveApplication($lab_id, $application_id)
    {
        return
            (bool) Lab::where('id', $lab_id)
                ->whereHas('applications', function ($q) use ($application_id) {
                    $q->where('id', $application_id);
                })
                ->count();
    }
}
