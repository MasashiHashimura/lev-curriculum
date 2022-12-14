<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        @extends('layouts.app')
        @section('content')
            <h1>Blog Name</h1>
            <p class="edit">[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
            
            <form action="/posts/{{ $post->id }}" id="form_delete" method="post" style="display:inline">
                @csrf
                @method('DELETE')
                <input type="submit" style="display:none;"></input>
                <button type="submit">[<span onclick="return deletePost(this);">delete</span>]</button> 
            </form>
                    
            <div class="content">
                <div class="content__post">
                    <h2 class='title'>{{ $post->title }}</h2>
                    <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
                    <p class='body'>{{ $post->body }}</p> 
                    <p class='updated_at'>{{$post->updated_at}}</p>
                </div>
            </div>
            <div class="footer">
                <a href="/">back</a>
            </div>
            <script>
            function deletePost (e){
                'use strict';
                if (confirm('削除すると復元できません。\n本当に削除しますか？')){
                    document.getElementByID('form_delete').submit();
                }else{
                    return false; 
                }
            }
            </script>
        @endsection
    </body>
</html>