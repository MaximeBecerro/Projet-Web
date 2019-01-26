<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function store(Request $request)
    {
        $name = $request->input('name');

        return view('idees');
    }
}
