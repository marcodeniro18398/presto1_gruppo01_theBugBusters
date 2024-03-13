<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Mail\BecomeRevisor;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{

    public function homepage(){
        $announcements = Announcement::where('is_accepted', true)->orderBy('created_at', 'desc')->take(6)->get();
        return view('homepage', compact('announcements'));
    }
    public function categoryShow(Category $category){
        $announcements = $category->announcements()->where('is_accepted', true)->orderBy('created_at', 'desc')->get();

        return view('categoryShow', compact('category', 'announcements'));
    }

    public function workWithUs(){
        return view('work-with-us');
    }

    public function workWithUsSubmit(){
        return view('work-with-us.submit');

    }

}
