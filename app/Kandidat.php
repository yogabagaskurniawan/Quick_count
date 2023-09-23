<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kandidat extends Model
{
    protected $fillable = [
        'name',
        'image',
        'deskripsi',
        'status',
        'slug',
        'event_id'
    ];
    
    public function Event()
    {
        return $this->belongsTo(Event::class);
    }
    
    public function scopeActive($query)
    {
        return $query->where('status', 'aktif')->orderBy('created_at', 'DESC');
    }
    
    public function vote()
    {
        return $this->hasMany('App\Vote', 'kandidat_id', 'id');
    }
}
