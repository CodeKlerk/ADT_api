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

}
