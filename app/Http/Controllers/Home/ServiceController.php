<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('pages.home.services.index');
    }

    public function show(Service $service)
    {
        $services = Service::all();
        return view('pages.home.services.show', compact('service', 'services'));
    }
}
