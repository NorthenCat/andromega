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

        if (isset($filters['search']) && $filters['search'] != '') {
            $searchWords = explode(' ', $filters['search']);
            foreach ($searchWords as $word) {
                if (strlen($word) > 2) { // Skip very short words
                    $q = $q->where('question', 'like', '%' . $word . '%');
                }
            }
        }

        return $q;
    }
}
