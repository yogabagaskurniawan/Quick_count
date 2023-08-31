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

    public function Kandidats()
    {
        return $this->hasMany(Kandidat::class);
    }

    public function vote()
    {
        return $this->hasMany('App\Vote', 'event_id', 'id');
    }

    public function userVote()
    {
        return $this->hasMany('App\UserVote', 'event_id', 'id');
    }
}
