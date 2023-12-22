<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PageController extends Controller
{
    public function index() {
        return Inertia::render('HomePage');
    }
    public function blogs() {
        return Inertia::render('BlogPage');
    }
    public function about() {
        return Inertia::render('AboutPage');
    }
    public function contact() {
        return Inertia::render('ContactPage');
    }
}
