<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::orderByDesc('created_at')->paginate(20);
        return view('pages.dashboard.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.dashboard.service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $service = new Service();
        if ($file = $request->file('photo_url')) {
            $name = time() . preg_replace('/\s+/', '', $file->getClientOriginalName());
            $file->move('uploads', $name);
            $service->photo_url = $name;
        }
        $service->title = $request->title;
        $service->meta_description = $request->meta_description;
        $service->description = $request->description;
        $service->save();
        return redirect()->route('admin.service.index')->with('success', 'با موفقیت ثبت شد');
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
    public function edit(Service $service)
    {
        return view('pages.dashboard.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        if ($file = $request->file('photo_url')) {
            $name = time() . preg_replace('/\s+/', '', $file->getClientOriginalName());
            $file->move('uploads', $name);
            $service->photo_url = $name;
        }
        $service->title = $request->title;
        $service->meta_description = $request->meta_description;
        $service->description = $request->description;
        $service->save();
        return redirect()->route('admin.service.index')->with('success', 'با موفقیت ثبت شد');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('admin.service.index')->with('danger', 'با موفقیت حذف شد');

    }
}
