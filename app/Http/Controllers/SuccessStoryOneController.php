<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Inertia\Response;
use Inertia\Inertia;

class SuccessStoryOneController extends Controller
{
    public function index(): Response
    {
        $breadcrumbs = [
            [
                'label' => 'Success Stories',
                'route' => 'success-stories',
                'exist' => Route::has('success-stories'),
            ],
            [
                'label' => 'Success Story One',
                'route' => 'success-story-one',
                'exist' => Route::has('success-story-one'),
            ],
        ];

        return Inertia::render('SuccessStories/SuccessStoryOne',  [
            'breadcrumbs' => $breadcrumbs,
        ]);
    }
}
