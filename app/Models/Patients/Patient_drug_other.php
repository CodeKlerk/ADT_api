<?php

namespace App\Models\Patients;

use Illuminate\Database\Eloquent\Model;

class Patient_drug_other extends Model
{
    protected $table = 'tbl_patient_drug_other';
    protected $hidden = ['patient_id'];

    public function patient(){
        return $this->belongsTo('App\Models\Patients\Patient', 'patient_id');
    }
    
}
