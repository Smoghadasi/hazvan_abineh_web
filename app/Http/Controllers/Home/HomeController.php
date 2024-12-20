<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home.index');
    }

    public function about()
    {
        return view('pages.home.about.index');
    }
    public function services()
    {
        return view('pages.home.services.index');
    }

    public function project()
    {
        return view('pages.home.project.index');
    }
}
