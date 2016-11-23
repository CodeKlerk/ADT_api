<?php
namespace App\Models\Visits;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    protected $table = 'tbl_visit';
    protected $fillable = ['current_height', 'current_weight', 'visit_date', 'appointment_adherence', 'is_active', 'patient_id', 'facility_id', 'user_id', 'purpose_id', 'last_regimen_id', 'current_regimen_id', 'change_reason_id', 'non_adherence_reason_id', 'appointment_id'];
    public $timestamps  = false;
 
    /**
    * Defining the relationships
    */

    public function patient(){
        return $this->belongsTo('App\Models\Patients\patient', 'id', 'patient_id');
    }   

    public function visit_item(){
        return $this->hasMany('App\Models\Visits');
    }

}
