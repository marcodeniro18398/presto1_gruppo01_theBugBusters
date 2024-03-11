<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Http\Controllers\PublicController;

class PublicController extends Controller
{

    
    public function homepage(){
        $announcements = Announcement::take(6)->get()->sortByDesc('created_at');
        return view('homepage', compact('announcements'));
    }
    public function categoryShow(Category $category){
        return view('categoryShow', compact('category'));
    }


}
