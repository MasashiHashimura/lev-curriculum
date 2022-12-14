<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        @extends('layouts.app')
        @section('content')
            <h1>Blog Name</h1>
    
            <p class='create'>[<a href='/posts/create'>create</a>]</p>
    
            <div class='posts'>
                @foreach ($posts as $post)
                    <div class='post'>
                        <h2 class='title'>
                            <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                        </h2>
                        <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
                        <p class='body'>{{ $post->body }}</p>
                        <form action="/posts/{{ $post->id }}" id="form_delete" method="post" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <input type="submit" style="display:none;"></input>
                            <button type="submit">[<span onclick="return deletePost(this);">delete</span>]</button> 
                        </form>
                    </div>
                @endforeach
            </div>
                    <div class="footer">
                <a href="/">back</a>
            </div>
            <div class='paginate'>
                {{ $posts->links() }}
            </div>
        @endsection
    </body>
</html>