<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog Page', 'posts' =>[
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Artike 1',
            'author' => 'Gilang Purnomo',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi sit beatae culpa ab magni reiciendis, officia dignissimos tenetur qui quam accusamus
            porro corporis deleniti quia accusantium eaque ratione minus! Fugit.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Artike 2',
            'author' => 'Gilang Purnomo',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur beatae eos expedita quo ab fugiat
            blanditiis a excepturi deserunt accusamus amet facilis, ducimus nisi iusto aliquam ut vero numquam totam?'
        ]
    ]]);
});

Route::get('posts/{slug}', function ($slug) {
        $posts = [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Artike 1',
                'author' => 'Gilang Purnomo',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi sit beatae culpa ab magni reiciendis, officia dignissimos tenetur qui quam accusamus
                porro corporis deleniti quia accusantium eaque ratione minus! Fugit.'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Artike 2',
                'author' => 'Gilang Purnomo',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur beatae eos expedita quo ab fugiat
                blanditiis a excepturi deserunt accusamus amet facilis, ducimus nisi iusto aliquam ut vero numquam totam?'
            ]
        ];

        $post = Arr::first($posts, function($post) use ($slug){
            return $post['slug'] == $slug;
        });

    return view('post', ['title' => 'Single Artikel', 'post' => $post]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Page']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Me!!']);
});
