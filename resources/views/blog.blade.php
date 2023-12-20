@extends('layouts.template')
@section('title', 'Blog')

@section('content')

<h1>Listado de posts</h1>

@foreach ($posts as $post)
<p>
    <strong>{{ $post['id'] }}</strong>
    <a href="{{ route('blog-post', $post['slug']) }}">{{ $post['title'] }}</a>
</p>

@endforeach
@endSection
