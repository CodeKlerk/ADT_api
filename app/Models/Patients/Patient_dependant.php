<?php

namespace App\Models\Patients;

use Illuminate\Database\Eloquent\Model;

class Patient_dependant extends Model
{
    protected $table = 'tbl_patient_dependant';
    protected $fillable = ['patient_id', 'dependant_id'];
    protected $hidden  = ['patient_id', 'dependant_id'];
    public $timestamps  = false;
    
    public function patient(){
        return $this->belongsTo('App\Models\Patients\Patient', 'patient_id');
    }
    public function dependant(){
        return $this->belongsTo('App\Models\Patients\Patient','patient_id');
    }
}
