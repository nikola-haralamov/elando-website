<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Inertia\Response;
use Inertia\Inertia;

class NewTwoController extends Controller
{
    public function index(): Response
    {
        $breadcrumbs = [
            [
                'label' => 'News',
                'route' => 'news',
                'exist' => Route::has('news'),
            ],
            [
                'label' => 'New two',
                'route' => 'new-two',
                'exist' => Route::has('new-two'),
            ],
        ];

        return Inertia::render('News/NewTwo',  [
            'breadcrumbs' => $breadcrumbs,
        ]);
    }
}
