<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryProject;
use App\Models\Project;
use Hekmatinasser\Verta\Verta;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::with('categoryProject')->orderByDesc('created_at')->paginate(40);
        return view('pages.dashboard.project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = CategoryProject::all();
        return view('pages.dashboard.project.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        $project = new Project();
        if ($file = $request->file('photo_url')) {
            $name = time() . preg_replace('/\s+/', '', $file->getClientOriginalName());
            $file->move('uploads', $name);
            $project->photo_url = $name;
        }
        $project->title = $request->title;
        $project->date = Verta::parse($request->date)->formatGregorian('Y/m/d');
        $project->customer = $request->customer;
        $project->categoryProject_id = $request->categoryProject_id;
        $project->size = $request->size;
        $project->location = $request->location;
        $project->description = $request->description;
        $project->save();

        return redirect()->route('admin.project.index')->with('danger', 'صاحب بار مورد نظر حذف شد');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
