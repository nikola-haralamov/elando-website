<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;

class ContactsController extends Controller
{
    public function index(): \Inertia\Response
    {
        $user = new User(['name' => 'Lisko']);

        return Inertia::render('Contact',  [
            'user' => $user,
        ]);
    }
}
