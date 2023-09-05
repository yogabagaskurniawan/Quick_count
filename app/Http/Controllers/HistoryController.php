<?php

namespace App\Http\Controllers;

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
        $history = Event::findOrFail($id);
        return view('admin.history.detailHistory', compact('history'));
    }

    public function hasilVoting($id)
    {
        $event = Event::findOrFail($id);
        $totalVotes = UserVote::where('event_id', $event->id)->count();
        return view('admin.history.hasilVoting', compact('event','totalVotes'));
    }
}
