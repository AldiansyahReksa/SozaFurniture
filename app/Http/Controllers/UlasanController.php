<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class UlasanController extends Controller
{
    public function index()
    {
        $reviews = Review::all();
        return view('ulasan.ulasan', compact('reviews'));
    }
}