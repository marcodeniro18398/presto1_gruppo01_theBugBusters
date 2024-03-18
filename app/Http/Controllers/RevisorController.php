<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\BecomeRevisor;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
    public function index(){
        $announcement_to_check=Announcement::where('is_accepted', null)->first();
        $announcement_to_undo=Announcement::whereNotNull('is_accepted')->get()->last();
    return view('revisor.index', compact('announcement_to_check', 'announcement_to_undo'));

    }

    public function acceptAnnouncement(Announcement $announcement){
        $announcement->setAccepted(true);
        return redirect()->back()->with('message','Annuncio accettato!');
    }

    public function rejectAnnouncement(Announcement $announcement){
        $announcement->setAccepted(false);
        return redirect()->back()->with('message','Annuncio rifiutato!');
    }
    public function undoAnnouncement(Announcement $announcement){
        $announcement->setAccepted(null);
        return redirect()->back()->with('message','Annuncio nuovamente da revisionare');
    }

    public function becomeRevisor(){
        Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user()));
        return redirect()->back()->with('message', 'Complimenti, hai richiesto di diventare revisore correttamente!');
    }

    public function makeRevisor(User $user){
        Artisan::call('presto:makeUserRevisor', ["email"=>$user->email]);
        return redirect('/')->with('message', 'Complimenti, sei diventato un revisore!');
    }


}
