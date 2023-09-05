<?php

namespace App\Http\Controllers\User;

use App\Event;
use App\Kandidat;
use App\UserVote;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomePageController extends Controller
{
    public function index()
    {
        $event = Event::active()->latest()->take(6)->get();
        $history = Event::getEventNonAktif()->take(6)->get();
        return view('user.index', compact('event', 'history'));
    }

    // ========= Event ============
    public function event()
    {
        $events = Event::active()->latest()->paginate(9);
        
        return view('user.event.eventAll', compact('events'));
    }

    public function detailEvent($slug)
    {
        $event = Event::active()->where('slug', $slug)->first();

        if (!$event) {
            return redirect('/');
        }

        $tglMulai = Carbon::parse($event->tgl_mulai);

        $currentDate = Carbon::now();
        // dd($currentDate);

        // jika waktu event belum mulai
        if ($currentDate->lessThan($tglMulai)) {
            return abort(404);
        }

        session(['intended_route' => 'event/'. $slug]);

        return view('user.event.detailEvent', compact('event'));
    }

    // list kandidat
    public function listKandidat($slug)
    {
        $event = Event::active()->where('slug', $slug)->first();

        if (!$event) {
            return redirect('/');
        }

        $kandidat = $event->Kandidats()->active()->get();
        // dd($kandidat);    

        return view('user.event.listKandidat', compact('kandidat'));
    }

    // detail kandidat
    public function detailKandidat($slug)
    {
        $kandidat = Kandidat::active()->where('slug', $slug)->first();

        if (!$kandidat) {
            return redirect('/');
        }

        return view('user.event.detailKandidat', compact('kandidat'));
    }

    // ========= History Event ============

    public function hasilVote()
    {
        $histories = Event::getEventNonAktif()->paginate(9);
        
        return view('user.history.hasilVoteAll', compact('histories'));
    }

    public function detailHasilVote($slug)
    {
        $history = Event::getEventNonAktif()->where('slug', $slug)->first();
        $totalVotes = UserVote::where('event_id', $history->id)->count();

        if (!$history) {
            return redirect('/');
        }

        return view('user.history.detailHasilVote', compact('history', 'totalVotes'));
    }
}
