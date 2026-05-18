<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tests extends Model
{

    protected $table = 'tests';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'phone',

    ];
}
