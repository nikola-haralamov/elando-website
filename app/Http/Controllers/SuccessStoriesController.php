<?php

namespace App\Http\Controllers;

use Inertia\Response;
use Inertia\Inertia;

class SuccessStoriesController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('SuccessStories',  [
        ]);
    }
}
