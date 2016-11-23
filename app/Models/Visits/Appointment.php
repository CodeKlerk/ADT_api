<?php
namespace App\Models\Visits;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table = 'tbl_appointment';
    protected $fillable = ['is_appointment', 'appointment_date', 'patient_id', 'facility_id'];
    public $timestamps  = false;


    public function patient(){
        return $this->belongsTo('App\Models\Patients\Patient', 'id', 'patient_id');
    }

}
