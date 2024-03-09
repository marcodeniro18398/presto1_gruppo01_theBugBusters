<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function create(){
        return view('announcements.create');
    }
    
    public function showAnnouncement(Announcement $announcement){
        return view('announcements.show', compact('announcement'));
    }
    
    public function indexAnnouncement(Announcement $announcement){
        $announcements = Announcement::paginate(8);
        return view('announcements.index', compact('announcements'));
    }
}
