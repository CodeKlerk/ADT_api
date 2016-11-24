<?php

namespace App\Models\General;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    protected $table = 'tbl_facility';
    protected $hidden = ['id', 'county_id', 'county_sub_id', 'supporter_id'];

    
    /**
    * function name: county,
    * Description: 
    * * Links the tbl_county table to the tbl_county
    * * Used to retrive the county information in a particular county
    * Use:
    *  Patient::with('county')->get();
    */
    public function county(){
        return $this->belongsTo('App\Models\General\County', 'county_id', 'id');
    }

    /**
    * function name: county_sub,
    * Description: 
    * * Links the tbl_county table to the tbl_county_sub
    * * Used to retrive the county_sub information in a particular county
    * Use:
    *  Patient::with('county_sub')->get();
    */
    public function county_sub(){
        return $this->belongsTo('App\Models\General\County_sub', 'county_sub_id', 'id');
    }

    /**
    * function name: supporter,
    * Description: 
    * * Links the tbl_county table to the tbl_supporter
    * * Used to retrive the supporter information in a particular county
    * Use:
    *  Patient::with('supporter')->get();
    */
    public function supporter(){
        return $this->belongsTo('App\Models\General\Supporter', 'supporter_id', 'id');
    }
}
