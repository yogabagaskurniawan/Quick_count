<?php

namespace App\Http\Controllers\User;

use App\Vote;
use App\Event;
use App\Kandidat;
use App\UserVote;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class VoteController extends Controller
{
    public function store($slug)
    {
        $kandidat = Kandidat::active()->where('slug', $slug)->firstOrFail();

        $validasiVote = UserVote::where('user_id', Auth::user()->id)->where('event_id', $kandidat->Event->id)->first();

        if ($validasiVote) {
            return response()->json(['success' => false, 'message' => 'Anda telah memberikan voting sebelumnya.']);
        }

        $vote = new Vote();
        $vote->kandidat_id = $kandidat->id;
        $vote->event_id = $kandidat->Event->id;
        $vote->save();

        $vote = new UserVote();
        $vote->user_id = Auth::user()->id;
        $vote->event_id = $kandidat->Event->id;
        $vote->save();

        $tglMulai = Carbon::parse($kandidat->Event->tgl_mulai);
        $currentDate = Carbon::now();
        // jika waktu event belum mulai
        if ($currentDate->lessThan($tglMulai)) {
            return abort(404);
        }

        return response()->json(['success' => true, 'message' => 'Pilihan suara Anda berhasil disimpan!']);
    }

    // ============= list Live Vote ================
    public function liveVote($slug)
    {
        $event = Event::active()->where('slug', $slug)->first();
        if (!$event) {
            return redirect('/');
        }
        // hitung total vote
        $totalVotes = UserVote::where('event_id', $event->id)->count();
        // hitung total kandidat
        $totalVotesKandidat = [];
        foreach ($event->Kandidats as $kandidat) {
            $totalVotesKandidat[$kandidat->id] = $kandidat->vote()->count();
        }

        $tglMulai = Carbon::parse($event->tgl_mulai);
        $currentDate = Carbon::now();
        // jika waktu event belum mulai
        if ($currentDate->lessThan($tglMulai)) {
            return abort(404);
        }
        return view('user.history.detailHasilVote', compact('event', 'totalVotes', 'totalVotesKandidat'));
    }

    public function updateVoteCount($eventSlug)
    {
        $event = Event::where('slug', $eventSlug)->first();
        if (!$event) {
            return response()->json(['error' => 'Event not found'], 404);
        }

        // Set header untuk SSE
        header('Content-Type: text/event-stream');
        header('Cache-Control: no-cache');
        header('Connection: keep-alive');

        // Kirim data vote setiap beberapa detik
        while (true) {
            $totalVotes = UserVote::where('event_id', $event->id)->count();
            $totalVotesKandidat = [];
            foreach ($event->Kandidats as $kandidat) {
                $totalVotesKandidat[$kandidat->slug] = $kandidat->vote()->count();
            }
            echo "data: " . json_encode(['slug' => $kandidat->slug, 'totalVotes' => $totalVotes, 'totalVotesKandidat' => $totalVotesKandidat]) . "\n\n";
            ob_flush();
            flush();
            sleep(1); // mengatur interval pembaruan 
        }
    }

}