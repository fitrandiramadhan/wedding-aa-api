<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('pages.about');
    }

    public function temps() {
        return view('pages.temps');
    }
}
