<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TroliController extends Controller
{
    public function index()
    {
        return view('troli.index');
    }
}