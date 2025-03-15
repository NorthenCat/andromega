<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DailyVisitor extends Model
{
    protected $table = 'daily_visitors';
    protected $fillable = [
        'date',
        'count',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'date' => 'date',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
