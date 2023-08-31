<?php

namespace App\Http\Controllers\User;

use App\Vote;
use App\Kandidat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\UserVote;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class VoteController extends Controller
{
    public function store($slug)
    {
        $kandidat = Kandidat::active()->where('slug', $slug)->first();

        $validasiVote = UserVote::where('user_id', Auth::user()->id)->where('event_id', $kandidat->Event->id)->first();

        if ($validasiVote) {
        return redirect()->back()->with('error', 'Anda telah memberikan voting sebelumnya.');
        }

        $vote = new Vote();
        $vote->kandidat_id = $kandidat->id; 
        $vote->event_id = $kandidat->Event->id; 
        $vote->save();

        $vote = new UserVote();
        $vote->user_id = Auth::user()->id; 
        $vote->event_id = $kandidat->Event->id; 
        $vote->save();

        return redirect()->back()->with('success', 'Berhasil memilih kandidat.');
    }

}
