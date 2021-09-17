<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EjoController extends Controller
{
    public function index()
    {
        return view('main.ejo.index');
    }
}
