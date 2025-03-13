<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    protected $table = 'faq';
    protected $fillable = [
        'question',
        'answer',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function scopeFilter($query, array $filters)
    {
        $q = $query;

        if (isset($filters['question']) && $filters['question'] != '') {
            $q = $q->where('question', 'like', '%' . $filters['question'] . '%');
        }

        return $q;
    }
}
