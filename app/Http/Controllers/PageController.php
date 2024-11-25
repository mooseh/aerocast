<?php

namespace App\Http\Controllers;

use App\Facades\OS;
use Inertia\Inertia;
use App\Models\Profile;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Home Function
     */
    public function Home(Request $request)
    {
        if (!OS::hasProgram('docker')) {
            return $this->setup($request);
        }

        $profiles = Profile::all();

        return Inertia::render('Home', [
            "profiles" => $profiles
        ]);
    }

    function setup(Request $request)
    {
        return Inertia::render('Setup');
    }
}
