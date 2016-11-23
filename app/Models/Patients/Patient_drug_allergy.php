<?php

namespace App\Models\Patients;

use Illuminate\Database\Eloquent\Model;

class Patient_drug_allergy extends Model
{
    protected $table = 'tbl_patient_drug_allergy';
    protected $hidden = ['id', 'patient_id', 'drug_id'];
    protected $fillable = ['patient_id', 'drug_id'];
    public $timestamps  = false;
    
    public function patient(){
        return $this->belongsTo('App\Models\Patients\Patient', 'patient_id');
    }

    public function drug(){
        return $this->belongsTo('App\Models\General\Drug', 'drug_id', 'id');
    }
}
