<?php

namespace App\Http\Controllers;

use Inertia\Response;
use Inertia\Inertia;

class AboutController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('About', [
        ]);
    }
}
