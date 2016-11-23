<?php

namespace App\Models\Drugs;

use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
    protected $table = 'tbl_drug';
    protected $hidden  = ['id', 'unit_id', 'supporter_id', 'generic_id', 'dose_id'];

    // public function unit(){
    //     return $this->belongsTo('App\Unit', 'unit_id', 'id');
    // }

    // public function supporter(){
    //     return $this->belongsTo('App\Models\Patients\Supporter', 'supporter_id', 'id');
    // }

    public function generic(){
        return $this->belongsTo('App\Generic', 'generic_id', 'id');
    }

    public function dose(){
        return $this->belongsTo('App\Dose', 'dose_id', 'id');
    }

    public function drug_instruction(){
        return $this->hasMany('App\Drug_instruction', 'drug_id', 'id');
    }
    
}
