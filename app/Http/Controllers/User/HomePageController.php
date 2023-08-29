<?php

namespace App\Http\Controllers\User;

use App\Event;
use App\Http\Controllers\Controller;
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

    public function detailEvent($slug)
    {
        $event = Event::active()->where('slug', $slug)->first();

        if (!$event) {
            return redirect('/');
        }

        $tglMulai = Carbon::parse($event->tgl_mulai);

        $currentDate = Carbon::now();
        // dd($currentDate);

        if ($currentDate->lessThan($tglMulai)) {
            return redirect('/')->with('error', 'Event has not started yet.');
        }

        return view('user.detailEvent', compact('event'));
    }



}
