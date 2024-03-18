<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Inertia\Response;
use Inertia\Inertia;

class BlogOneController extends Controller
{
    public function index(): Response
    {
        $breadcrumbs = [
            [
                'label' => 'Blog',
                'route' => 'blog',
                'exist' => Route::has('blog'),
            ],
            [
                'label' => 'Blog One',
                'route' => 'blog-one',
                'exist' => Route::has('blog-one'),
            ],
        ];

        return Inertia::render('Blog/BlogOne',  [
            'breadcrumbs' => $breadcrumbs,
        ]);
    }
}
