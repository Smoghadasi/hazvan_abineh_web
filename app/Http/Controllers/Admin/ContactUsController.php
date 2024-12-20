<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        $contacts = ContactUs::orderByDesc('created_at')->paginate(30);
        return view('pages.dashboard.contact.index', compact('contacts'));
    }

}
