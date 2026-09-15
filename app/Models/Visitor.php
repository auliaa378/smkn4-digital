<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    protected $table = 'visitors';

    protected $fillable = [
        'tanggal',
        'session_id',
        'ip_address',
        'user_agent',
        'url',
    ];
}