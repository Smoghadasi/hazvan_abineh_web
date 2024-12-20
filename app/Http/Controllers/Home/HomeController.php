<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Service;
use App\Models\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::take(3)->orderByDesc('created_at')->get();
        $teams = Team::take(3)->orderByDesc('created_at')->get();
        $projects = Project::with('categoryProject')->take(6)->orderByDesc('created_at')->get();
        return view('pages.home.index', compact('services', 'teams', 'projects'));
    }

    public function about()
    {
        return view('pages.home.about.index');
    }

    public function project()
    {
        return view('pages.home.project.index');
    }
}
