<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function blog()
    {
        // Consulta a la base de datos
        $posts = [
            [
                'id' => 1,
                'title' => 'Primer post',
                'slug' => 'primer-post'
            ],
            [
                'id' => 2,
                'title' => 'Segundo post',
                'slug' => 'segundo-post'
            ],
        ];
        return view('blog', compact('posts'));
    }

    public function blogPost($slug)
    {
        // Consulta a la base de datos
        $post = $slug;
        return view('post', ['post' => $post]);
    }
}
