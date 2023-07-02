<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;

class DatabaseController extends Controller
{
    public function index() {
        $train = Train::all();

        return view('welcome', compact('train'));
    }
}
