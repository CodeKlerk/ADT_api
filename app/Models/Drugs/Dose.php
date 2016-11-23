<?php

namespace App\Models\Drugs;

use Illuminate\Database\Eloquent\Model;

class Dose extends Model
{
    protected $table = 'tbl_dose';
    protected $hidden  = ['id'];
}
