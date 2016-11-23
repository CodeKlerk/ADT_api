<?php

namespace App\Models\Patients;

use Illuminate\Database\Eloquent\Model;

class Patient_tb extends Model
{
    protected $table = 'tbl_patient_tb';
    protected $fillable = ['patient_id', 'category', 'phase', 'start_date', 'end_date'];
    protected $hidden = ['patient_id'];
    public $timestamps  = false;
}
