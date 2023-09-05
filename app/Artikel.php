<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table = 'artikel';
    protected $fillable = [
        'name',
        'image',
        'slug',
        'deskripsi',
        'status'
    ];

    public function scopeActive($query)
    {
        return $query->where('status', 'aktif')->orderBy('created_at', 'DESC');
    }
}
