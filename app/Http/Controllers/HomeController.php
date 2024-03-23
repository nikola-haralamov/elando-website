<?php

namespace App\Http\Controllers;

use Inertia\Response;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index(): Response
    {

        return Inertia::render('Home',  [
        ]);
    }
}
