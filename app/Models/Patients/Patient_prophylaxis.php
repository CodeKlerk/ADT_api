<?php

namespace App\Models\Patients;

use Illuminate\Database\Eloquent\Model;

class Patient_prophylaxis extends Model
{
    protected $table = 'tbl_patient_prophylaxis';
    protected $hidden = ['prohylaxis_id', 'patient_id'];
    protected $fillable = ['patient_id', 'prohylaxis_id'];
    public $timestamps  = false;
    
    public function prophylaxis(){
        return $this->belongsTo('App\Models\Patients\Prophylaxis', 'prohylaxis_id', 'id');
    }
}
