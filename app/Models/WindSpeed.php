<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WindSpeed extends Model
{
    protected $fillable = [
        'node_id',
        'value',
        'time'
    ];
}
