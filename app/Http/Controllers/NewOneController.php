<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Inertia\Response;
use Inertia\Inertia;

class NewOneController extends Controller
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
                'label' => 'New One',
                'route' => 'new-one',
                'exist' => Route::has('new-one'),
            ],
        ];

        return Inertia::render('News/NewOne',  [
            'breadcrumbs' => $breadcrumbs,
        ]);
    }
}
