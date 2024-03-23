<?php

namespace App\Http\Controllers;

use Inertia\Response;
use Inertia\Inertia;

class BlogController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Blog',  [
        ]);
    }
}
