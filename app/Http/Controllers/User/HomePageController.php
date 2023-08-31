<?php

namespace App\Http\Controllers\User;

use App\Event;
use App\Http\Controllers\Controller;
use App\Kandidat;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $eventQuery = Event::active();
        $event = $eventQuery->latest()->take(6)->get();
        // dd($event);
        return view('user.index', compact('event'));
    }

    // event
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
        return view('user.detailEvent', compact('event'));
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

        return view('user.kandidat', compact('kandidat'));
    }

    // detail kandidat
    public function detailKandidat($slug)
    {
        $kandidat = Kandidat::active()->where('slug', $slug)->first();

        if (!$kandidat) {
            return redirect('/');
        }

        return view('user.detailKandidat', compact('kandidat'));
    }
}
