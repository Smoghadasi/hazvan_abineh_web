<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::take(3)->orderByDesc('created_at')->get();

        return view('pages.home.services.index', compact('services'));
    }

    public function show(Service $service)
    {
        $services = Service::all();
        return view('pages.home.services.show', compact('service', 'services'));
    }
}
