<?php

use Illuminate\Support\Arr;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});
Route::get('/posts', function () {
    return view('posts', [
        'title' => 'Blog',
        'posts' => [
            [
                'id' => 1,
                'slug' => 'artikel-1',
                'title' => 'artikel 1',
                'author' => 'manuk ea',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta tenetur veniam, tempora numquam quibusdam minima illo error recusandae aliquam vero quam quia voluptatem ducimus saepe perspiciatis dicta dolorem dolor sunt!',
            ],
            [
                'id' => 2,
                'slug' => 'artikel-2',
                'title' => 'artikel 2',
                'author' => 'palpal ea',
                'body' => 'Lorem ipsum dolor sit amet consectetur adiplo error recusandae aliquam vero quam quia voluptatem ducimus saepe perspiciatis dicta dolorem dolor sunt!',
            ],
        ]
    ]);
});

Route::get('/post/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'artikel-1',
            'title' => 'artikel 1',
            'author' => 'manuk ea',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta tenetur veniam, tempora numquam quibusdam minima illo error recusandae aliquam vero quam quia voluptatem ducimus saepe perspiciatis dicta dolorem dolor sunt!',
        ],
        [
            'id' => 2,
            'slug' => 'artikel-2',
            'title' => 'artikel 2',
            'author' => 'palpal ea',
            'body' => 'Lorem ipsum dolor sit amet consectetur adiplo error recusandae aliquam vero quam quia voluptatem ducimus saepe perspiciatis dicta dolorem dolor sunt!',
        ],
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    // dd($post['slug']);
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});


Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});