<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;

class TechnologyController extends Controller
{
    public function index(): \Inertia\Response
    {
        $user = new User(['name' => 'Lisko']);

        return Inertia::render('Technology',  [
            'user' => $user,
        ]);
    }
}
