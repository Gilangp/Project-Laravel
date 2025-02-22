<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Artikel 1',
                'author' => 'Gilang Purnomo',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi sit beatae culpa ab magni reiciendis, officia dignissimos tenetur qui quam accusamus
                porro corporis deleniti quia accusantium eaque ratione minus! Fugit.'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Artikel 2',
                'author' => 'Gilang Purnomo',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur beatae eos expedita quo ab fugiat
                blanditiis a excepturi deserunt accusamus amet facilis, ducimus nisi iusto aliquam ut vero numquam totam?'
            ]
        ];
    }

    public static function find($slug): array
    {
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

        if (! $post) {
            abort(404);
        }

        return $post;
    }
}
