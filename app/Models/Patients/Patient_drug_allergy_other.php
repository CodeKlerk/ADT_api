<?php

namespace App\Models\Patients;

use Illuminate\Database\Eloquent\Model;

class Patient_drug_allergy_other extends Model
{
    protected $table = 'tbl_patient_drug_allergy_other';
    protected $hidden = ['id'];
    protected $fillable = ['patient_id', 'allergy_name'];
    public $timestamps  = false;
    
    public function patient(){
        return $this->belongsTo('App\Models\General\Patient', 'patient_id');
    }
}
