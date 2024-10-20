<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WaterFlow extends Model
{
    protected $fillable = [
        'node_id',
        'value',
        'time'
    ];
}
