<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeController extends Controller
{
    public function index()
    {
        return view('fe.index');
    }
}
