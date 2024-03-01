<?php

namespace App\Http\Controllers;

use Inertia\Response;
use Inertia\Inertia;
use App\Models\User;

class HomeController extends Controller
{
    public function index(): Response
    {
        $user = new User(['name' => 'Nikola']);

        return Inertia::render('Home',  [
            'user' => $user,
        ]);
    }
}
