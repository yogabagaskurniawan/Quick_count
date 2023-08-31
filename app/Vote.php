<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $fillable = [
        'event_id',
        'kandidat_id',
    ];

    public function event()
    {
        return $this->belongsTo('App\Event', 'event_id', 'id');
    }
    
    public function kandidat()
    {
        return $this->belongsTo('App\Kandidat', 'kandidat_id', 'id');
    }
}
