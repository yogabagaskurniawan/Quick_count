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

    public function Kandidats()
    {
        return $this->hasMany(Kandidat::class);
    }
}
