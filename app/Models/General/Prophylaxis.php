<?php

namespace App\Models\General;

use Illuminate\Database\Eloquent\Model;

class Prophylaxis extends Model
{
    protected $table = 'tbl_prophylaxis';
    protected $hidden = ['id', 'active'];
}
