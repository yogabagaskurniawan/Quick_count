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

    public static function menghitungTotalVotes($eventId)
    {
        $totalVotes = UserVote::where('event_id', $eventId)->count();
        return $totalVotes;
    }

    public static function menghitungTotalVotesKandidat($eventId)
    {
        $totalVotesKandidat = [];
        $kandidats = Kandidat::where('event_id', $eventId)->withCount('vote')->get();
        foreach ($kandidats as $kandidat) {
            $totalVotesKandidat[$kandidat->id] = $kandidat->vote()->count();
        }

        return $totalVotesKandidat;
    }
}
