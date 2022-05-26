<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        $services = \App\Service::all();

        return view('service.index', compact('services'));
    }
}
