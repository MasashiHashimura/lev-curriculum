{"filter":false,"title":"create.blade.1.php","tooltip":"/blog/resources/views/posts/create.blade.1.php","undoManager":{"mark":1,"position":1,"stack":[[{"start":{"row":0,"column":0},"end":{"row":23,"column":7},"action":"remove","lines":["<!DOCTYPE HTML>","<html lang=\"{{ str_replace(\"_\", \"-\", app()->getLocale()) }}\">","    <head>","        <meta charset=\"utf-8\">","        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">","        <title>Posts</title>","        <!-- Fonts -->","        <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,600\" rel=\"stylesheet\">","        <link rel=\"stylesheet\" href=\"/css/app.css\">","    </head>","    <body>","        <h1 class=\"title\">","            {{ $post->title }}","        </h1>","        <div class=\"content\">","            <div class=\"content__post\">","                <h3>本文</h3>","                <p>{{ $post->body }}</p>","        </div>","        <div class=\"footer\">","            <a href=\"/\">戻る</a>","        </div>","    </body>","</html>"],"id":2}],[{"start":{"row":0,"column":0},"end":{"row":22,"column":7},"action":"insert","lines":["<!DOCTYPE HTML>","<html lang=\"{{ str_replace('_', '-', app()->getLocale()) }}\">","    <head>","        <meta charset=\"utf-8\">","        <title>Blog</title>","    </head>","    <body>","        <h1>Blog Name</h1>","        <form action=\"/posts\" method=\"POST\">","            @csrf","            <div class=\"title\">","                <h2>Title</h2>","                <input type=\"text\" name=\"post[title]\" placeholder=\"タイトル\"/>","            </div>","            <div class=\"body\">","                <h2>Body</h2>","                <textarea name=\"post[body]\" placeholder=\"今日も1日お疲れさまでした。\"></textarea>","            </div>","            <input type=\"submit\" value=\"保存\"/>","        </form>","        <div class=\"back\">[<a href=\"/\">back</a>]</div>","    </body>","</html>"],"id":3}]]},"ace":{"folds":[],"scrolltop":90,"scrollleft":0,"selection":{"start":{"row":22,"column":7},"end":{"row":22,"column":7},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":5,"state":"start","mode":"ace/mode/php"}},"timestamp":1662601630541,"hash":"56acfdbeea79be2e4810ff93d9d050d05caf6126"}