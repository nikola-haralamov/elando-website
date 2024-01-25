<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\User;

class HomeController extends Controller
{
    public function index(): \Inertia\Response
    {
        $user = new User(['name' => 'Nikola']);

        return Inertia::render('Home',  [
            'user' => $user,
        ]);
    }
}
