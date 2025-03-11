<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    protected $table = 'services';
    protected $fillable = [
        'uuid',
        'nama',
        'icon',
        'deskripsi',
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

        if (isset($filters['nama']) && $filters['nama'] != '') {
            $q = $q->where('nama', 'like', '%' . $filters['nama'] . '%');
        }

        return $q;
    }
}
