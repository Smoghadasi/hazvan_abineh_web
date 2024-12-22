<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Opinion;
use Illuminate\Http\Request;

class OpinionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $opinions = Opinion::paginate(20);
        return view('pages.dashboard.opinion.index', compact('opinions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dashboard.opinion.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $opinion = new Opinion();
        if ($file = $request->file('photo_url')) {
            $name = time() . preg_replace('/\s+/', '', $file->getClientOriginalName());
            $file->move('uploads', $name);
            $opinion->photo_url = $name;
        }
        $opinion->name = $request->name;
        $opinion->description = $request->description;
        $opinion->job = $request->job;
        $opinion->save();
        return redirect()->route('admin.opinion.index')->with('success', 'با موفقیت ثبت شد');

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
