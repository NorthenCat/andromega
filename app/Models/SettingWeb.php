<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SettingWeb extends Model
{
    protected $table = 'setting_web';

    protected $fillable = [
        'nama_website',
        'logo',
        'favicon',
        'email',
        'telepon',
        'alamat',
        'contact_sales',
        'contact_support',
        'meta_author',
        'meta_title',
        'meta_description',
        'meta_keyword',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
