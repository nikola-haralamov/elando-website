<?php

namespace App\Http\Controllers;

use Inertia\Response;
use Inertia\Inertia;
use App\Models\User;

class BlogController extends Controller
{
    public function index(): Response
    {
        $user = new User(['name' => 'Lisko']);

        return Inertia::render('Blog',  [
            'user' => $user,
        ]);
    }
}
