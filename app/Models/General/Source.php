<?php

namespace App\Models\General;

use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
    protected $table = 'tbl_source';
    protected $hidden = ['is_active'];
}
