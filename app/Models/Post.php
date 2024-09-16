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
                'title' => 'Judul Artikel 1',
                'author' => 'Putu Indra Mahendra',
                'body' => ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet inventore temporibus, iure corrupti nesciunt
        aspernatur quasi perferendis illum quae maiores aut consequuntur, magnam minima harum nam, natus tempore?
        Nemo, vitae.',
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Putu Indra Mahendra',
                'body' => ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repellat tenetur blanditiis iste, dolores alias ut
        hic aut ea explicabo ullam nobis dignissimos accusantium iure nesciunt fugit officiis ratione commodi incidunt.',
            ],
        ];
    }

    public static function find($slug){
        return Arr::first(static::all(), function ($post) use ($slug) {
            return $post['slug'] == $slug;
        });
    }
}
