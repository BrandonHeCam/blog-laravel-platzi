<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function blog()
    {
        // Consulta de posts recientes a base de datos, aplicando paginación.
        $posts = Post::latest()->paginate();
        return view('blog', compact('posts'));
    }

    public function blogPost(Post $post)
    {
        // Consulta a base de datos para obtener el post solicitado.
        return view('post', ['post' => $post]);
    }
}
