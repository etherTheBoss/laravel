<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppLog extends Model
{
    protected $fillable = [
        'id',
        'user_id',
        'log',
    ];
}
