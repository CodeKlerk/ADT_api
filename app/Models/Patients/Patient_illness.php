<?php

namespace App\Models\Patients;

use Illuminate\Database\Eloquent\Model;

class Patient_illness extends Model
{
    protected $table = 'tbl_patient_illness'; 
    public $timestamps  = false;
    protected $fillable = ['patient_id', 'illness_id'];
    protected $hidden = ['patient_id'];
}
