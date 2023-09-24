<?php

namespace App\Http\Controllers\User;

use App\Artikel;
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
        $artikel = Artikel::active()->latest()->take(3)->get();
        return view('user.index', compact('event', 'history', 'artikel'));
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
        // Memanggil method untuk memeriksa apakah event belum dimulai
        if ($this->isEventNotStarted($event->tgl_mulai)) {
            return abort(404);
        }
        // session ketika belum login
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
        // Memanggil method untuk memeriksa apakah event belum dimulai
        if ($this->isEventNotStarted($event->tgl_mulai)) {
            return abort(404);
        }
        return view('user.event.listKandidat', compact('kandidat'));
    }

    // detail kandidat
    public function detailKandidat($slug)
    {
        $kandidat = Kandidat::active()->where('slug', $slug)->first();
        if (!$kandidat) {
            return redirect('/');
        }
        // Memanggil method untuk memeriksa apakah event belum dimulai
        if ($this->isEventNotStarted($kandidat->Event->tgl_mulai)) {
            return abort(404);
        }
        return view('user.event.detailKandidat', compact('kandidat'));
    }

    // ========= Artikel ============
    public function artikel()
    {
        $artikels = Artikel::active()->paginate(9);
        return view('user.artikel.artikelAll', compact('artikels'));
    }

    public function detailArtikel($slug)
    {
        $artikel = Artikel::active()->where('slug', $slug)->first();
        if (!$artikel) {
            return redirect('/');
        }
        return view('user.artikel.detailArtikel', compact('artikel'));
    }

    // ======== MY FUNCTION ===========
    private function isEventNotStarted($eventStartTime)
    {
        $currentDate = Carbon::now();
        $eventStartTime = Carbon::parse($eventStartTime);
        return $currentDate->lessThan($eventStartTime);
    }
}
