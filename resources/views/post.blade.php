@extends('layouts.template')

@section('title')
{{ $post->title }}
@endSection

@section('content')
<h1>{{ $post->title }}</h1>
<p>{{ $post->body }}</p>
@endSection
