<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'name',
        'image',
        'deskripsi',
        'status',
        'slug',
        'tgl_mulai'
    ];

    public function scopeActive($query)
    {
        return $query->where('status', 'aktif')->orderBy('created_at', 'DESC');
    }
}
