<?php

namespace App\Http\Controllers;

use Inertia\Response;
use Inertia\Inertia;

class TechnologyController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Technology',  [
        ]);
    }
}
