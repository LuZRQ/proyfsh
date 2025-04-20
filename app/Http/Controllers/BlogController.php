<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog'); 
    }

    public function beCoVe()
    {
        return view('blog.beCoVe');
    }

    public function diSu()
    {
        return view('blog.diSu');
    }

    public function planSem()
    {
        return view('blog.planSem');
    }

    public function recuEner()
    {
        return view('blog.recuEner');
    }

    public function smothies()
    {
        return view('blog.smothies');
    }

    public function superAlimen()
    {
        return view('blog.superAlimen');
    }
}
