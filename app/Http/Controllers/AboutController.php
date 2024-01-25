<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;

class AboutController extends Controller
{
    public function index(): \Inertia\Response
    {
        $user = new User(['name' => 'Adi']);

        return Inertia::render('About', [
            'user' => $user,
        ]);
    }
}
