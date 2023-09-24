<?php

namespace App\Http\Controllers;

use App\Vote;
use App\Event;
use App\UserVote;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $history = Event::getEventNonAktif()->get();
        return view('admin.history.index', compact('history'));
    }

    public function detailHistory($id)
    {
        $history = Event::getEventNonAktif()->findOrFail($id);
        return view('admin.history.detailHistory', compact('history'));
    }

    public function hasilVoting($id)
    {
        $event = Event::getEventNonAktif()->findOrFail($id);
        $totalVotes = UserVote::where('event_id', $event->id)->count();
        return view('admin.history.hasilVoting', compact('event','totalVotes'));
    }

    // history tampilan user
    // ========= History Event ============
    public function hasilVote()
    {
        $histories = Event::getEventNonAktif()->paginate(9);
        return view('user.history.hasilVoteAll', compact('histories'));
    }
    
    public function detailHasilVote($slug)
    {
        $event = Event::getEventNonAktif()->where('slug', $slug)->first();
        if (!$event) {
            return redirect('/');
        }
        $eventId = $event->id;
        // method untuk menghitung total vote
        $totalVotes = Vote::menghitungTotalVotes($eventId);
        if (!$totalVotes) {
            return abort(404);
        }
        // method untuk menghitung total vote kandidat
        $totalVotesKandidat = Vote::menghitungTotalVotesKandidat($eventId);
        return view('user.history.detailHasilVote', compact('event', 'totalVotes', 'totalVotesKandidat'));
    }
}
