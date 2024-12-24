<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with('categoryProject')->orderByDesc('created_at')->get();

        return view('pages.home.project.index', compact('projects'));

    }

    public function show(Project $project)
    {
        return view('pages.home.project.show', compact('project'));

    }
}
