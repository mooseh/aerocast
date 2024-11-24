<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Home Function
     */
    public function Home(Request $request)
    {
        return Inertia::render('Home');
    }
}
