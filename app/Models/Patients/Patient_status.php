<?php

namespace App\Models\Patients;

use Illuminate\Database\Eloquent\Model;

class Patient_status extends Model
{
    protected $table = 'tbl_patient_status';
    public $timestamps  = false;
    protected $fillable = ['patient_id', 'status_id', 'change_date'];

    public function status(){
        return $this->hasOne('App\Models\Patients\status', 'id', 'status_id');
    }

}
