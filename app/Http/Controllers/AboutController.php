<?php

namespace App\Http\Controllers;

use Inertia\Response;
use Inertia\Inertia;
use App\Models\User;

class AboutController extends Controller
{
    public function index(): Response
    {
        $user = new User(['name' => 'Adi']);

        return Inertia::render('About', [
            'user' => $user,
        ]);
    }
}
