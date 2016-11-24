<?php

namespace App\Models\General;

use Illuminate\Database\Eloquent\Model;

class Who_stage extends Model
{
    protected $table = 'tbl_who_stage';
    protected $hidden = ['id', 'active'];
}
