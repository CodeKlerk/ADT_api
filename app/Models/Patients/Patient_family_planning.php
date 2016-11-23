<?php

namespace App\Models\Patients;

use Illuminate\Database\Eloquent\Model;

class Patient_family_planning extends Model
{
    protected $table = 'tbl_patient_family_planning';
    protected $fillable = ['patient_id', 'family_planning_id'];
    protected $hidden = ['patient_id', 'family_planning'];
     public $timestamps  = false;

    public function family_planning(){
        return $this->belongsTo('App\Models\Patients\Family_planning', 'family_planning_id', 'id');
    }
}
