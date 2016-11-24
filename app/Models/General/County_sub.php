<?php

namespace App\Models\General;

use Illuminate\Database\Eloquent\Model;

class County_sub extends Model
{
    protected $table = 'tbl_county_sub';
    protected $hidden = ['id', 'county_id'];

    public function county(){
        return $this->belongsTo('App\Models\General\County', 'county_id');
    }
}
