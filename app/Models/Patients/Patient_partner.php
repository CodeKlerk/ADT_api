<?php

namespace App\Models\Patients;

use Illuminate\Database\Eloquent\Model;

class Patient_partner extends Model
{
    protected $table = 'tbl_patient_partner';
    protected $fillable = ['patient_id', 'partner_id', 'status'];
    protected $hidden  = ['patient_id', 'partner_id'];
    public $timestamps  = false;

    public function partner(){
        return $this->belongsTo('App\Models\Patients\Patient', 'patient_id');
    }
}
