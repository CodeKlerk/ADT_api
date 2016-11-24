<?php

namespace App\Models\General;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'tbl_service';
    protected $hidden = ['id', 'is_active'];

}
