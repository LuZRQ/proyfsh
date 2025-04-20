<?php

namespace App\Http\Controllers;

use App\Models\Comment;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $comments = Comment::latest()->get(); // o lo que necesites
        return view('home', compact('comments'));
    }
}
