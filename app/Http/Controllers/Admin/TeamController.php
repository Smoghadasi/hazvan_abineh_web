<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::orderByDesc('created_at')->paginate(20);
        return view('pages.dashboard.team.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dashboard.team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $team = new Team();
        if ($file = $request->file('photo_url')) {
            $name = time() . preg_replace('/\s+/', '', $file->getClientOriginalName());
            $file->move('uploads', $name);
            $team->photo_url = $name;
        }
        $team->name = $request->name;
        $team->job = $request->job;
        $team->save();
        return redirect()->route('admin.team.index')->with('danger', 'صاحب بار مورد نظر حذف شد');
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
