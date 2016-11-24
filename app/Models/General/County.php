<?php

namespace App\Models\General;

use Illuminate\Database\Eloquent\Model;

class County extends Model
{
    protected $table = 'tbl_county';
    protected $hidden = ['id'];

    public function county_sub(){
        return $this->hasMany('App\Models\General\County_sub', 'county_id', 'id');
    }
}
