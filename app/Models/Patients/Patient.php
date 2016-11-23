<?php

namespace App\Models\Patients;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
/**
* Class_name : patient,
* Model for patient information
*/

class Patient extends Model
{
    use SoftDeletes;
    protected $table = 'tbl_patient';
    public $timestamps  = false;
    protected $dates = ['deleted_at'];
    protected $softDelete = true;
    protected $hidden  = ['id','who_stage_id', 'service_id', 'source_id', 'supporter_id', 'county_sub_id', 'facility_id'];
    protected $fillable = ['ccc_number', 'first_name', 'last_name', 'other_name', 'phone_number', 'alternate_number', 'physical_address', 'gender', 'birth_date', 'enrollment_date', 'support_group', 'is_pregnant', 'is_tb', 'is_tb_tested', 'is_smoke', 'is_alchohol', 'is_sms', 'service_id', 'facility_id', 'supporter_id', 'source_id', 'county_sub_id', 'who_stage_id'];


    /**
    * Defining relationships
    */

    public function patient_status(){
        return $this->hasOne('App\Models\Patients\Patient_status', 'patient_id', 'id');
    }
    public function patient_prophylaxis(){
        return $this->hasMany('App\Models\Patients\Patient_prophylaxis', 'patient_id', 'id');
    }

    public function patient_tb(){
        return $this->hasOne('App\Models\Patients\Patient_tb', 'patient_id', 'id');
    }

    public function patient_drug_other(){
        return $this->hasMany('App\Models\Patients\Patient_drug_other', 'patient_id', 'id');
    }

    public function patient_dependant(){
        return $this->hasMany('App\Models\Patients\Patient_dependant', 'patient_id', 'id');
    }

    public function patient_drug_allergy(){
        return $this->hasMany('App\Models\Patients\Patient_drug_allergy');
    }

    public function patient_family_planning(){
        return $this->hasMany('App\Models\Patients\Patient_family_planning', 'patient_id', 'id');
    }

    public function patient_partner(){
        return $this->hasMany('App\Models\Patients\Patient_partner');
    }

    public function visit(){
        return $this->hasMany('App\Models\Visits\Visit');
    }

    public function appointment(){
        return $this->hasOne('App\Models\Visits\Appointment');
    }
}
