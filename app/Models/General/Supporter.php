<?php

namespace App\Models\General;

use Illuminate\Database\Eloquent\Model;

class Supporter extends Model
{
    protected $table = 'tbl_supporter';
    protected $hidden = ['id', 'is_active'];
    
}
