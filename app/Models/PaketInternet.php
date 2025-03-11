<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaketInternet extends Model
{
    protected $table = 'paket_internet';
    protected $fillable = [
        'uuid',
        'tipe_paket',
        'nama_paket',
        'kecepatan',
        'harga',
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

        if (isset($filters['tipe_paket']) && $filters['tipe_paket'] != '') {
            $q = $q->where('tipe_paket', $filters['tipe_paket']);
        }

        if (isset($filters['nama_paket']) && $filters['nama_paket'] != '') {
            $q = $q->where('nama_paket', 'like', '%' . $filters['nama_paket'] . '%');
        }

        return $q;
    }
}
