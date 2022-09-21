{"filter":false,"title":"index.blade.php","tooltip":"/blog/resources/views/index.blade.php","undoManager":{"mark":17,"position":17,"stack":[[{"start":{"row":0,"column":0},"end":{"row":26,"column":0},"action":"remove","lines":["<!DOCTYPE html>","<html lang=\"{{ str_replace('_', '-', app()->getLocale()) }}\">","    <head>","        <meta charset=\"utf-8\">","        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">","","        <title>Blog</title>","","        <!-- Fonts -->","        <link href=\"https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap\" rel=\"stylesheet\">","","        <!-- Styles -->","","    </head>","    <body>","        <h1>Blog Name</h1>","        <div class=\"posts\">","                @foreach ($posts as $post)","                <div class='post'>","                    <h2 class='title'>{{ $post->title }}</h2>","                    <p class='body'>{{ $post->body }}</p>","                </div>","                @endforeach","        </div>","    </body>","</html>",""],"id":103}],[{"start":{"row":0,"column":0},"end":{"row":22,"column":7},"action":"insert","lines":["<!DOCTYPE html>","<html lang=\"{{ str_replace('_', '-', app()->getLocale()) }}\">","    <head>","        <meta charset=\"utf-8\">","        <title>Blog</title>","        <!-- Fonts -->","        <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,600\" rel=\"stylesheet\">","    </head>","    <body>","        <h1>Blog Name</h1>","        <div class='posts'>","            @foreach ($posts as $post)","                <div class='post'>","                    <h2 class='title'>{{ $post->title }}</h2>","                    <p class='body'>{{ $post->body }}</p>","                </div>","            @endforeach","        </div>","        <div class='paginate'>","            {{ $posts->links() }}","        </div>","    </body>","</html>"],"id":104}],[{"start":{"row":13,"column":21},"end":{"row":13,"column":61},"action":"remove","lines":["h2 class='title'>{{ $post->title }}</h2>"],"id":105},{"start":{"row":13,"column":20},"end":{"row":13,"column":21},"action":"remove","lines":["<"]}],[{"start":{"row":13,"column":20},"end":{"row":15,"column":5},"action":"insert","lines":["<h2 class='title'>","    <a href=\"/posts/{{ $post->id }}\">{{ $post->title }}</a>","</h2>"],"id":106}],[{"start":{"row":14,"column":4},"end":{"row":14,"column":8},"action":"insert","lines":["    "],"id":107}],[{"start":{"row":14,"column":8},"end":{"row":14,"column":12},"action":"insert","lines":["    "],"id":108}],[{"start":{"row":14,"column":12},"end":{"row":14,"column":16},"action":"insert","lines":["    "],"id":109}],[{"start":{"row":14,"column":16},"end":{"row":14,"column":20},"action":"insert","lines":["    "],"id":110}],[{"start":{"row":14,"column":20},"end":{"row":14,"column":24},"action":"insert","lines":["    "],"id":111}],[{"start":{"row":16,"column":0},"end":{"row":16,"column":4},"action":"insert","lines":["    "],"id":112}],[{"start":{"row":16,"column":0},"end":{"row":16,"column":4},"action":"remove","lines":["    "],"id":113}],[{"start":{"row":15,"column":0},"end":{"row":15,"column":4},"action":"insert","lines":["    "],"id":114}],[{"start":{"row":15,"column":4},"end":{"row":15,"column":8},"action":"insert","lines":["    "],"id":115}],[{"start":{"row":15,"column":8},"end":{"row":15,"column":12},"action":"insert","lines":["    "],"id":116}],[{"start":{"row":15,"column":12},"end":{"row":15,"column":16},"action":"insert","lines":["    "],"id":117}],[{"start":{"row":15,"column":16},"end":{"row":15,"column":20},"action":"insert","lines":["    "],"id":118}],[{"start":{"row":21,"column":27},"end":{"row":21,"column":28},"action":"remove","lines":["s"],"id":119}],[{"start":{"row":21,"column":27},"end":{"row":21,"column":28},"action":"insert","lines":["s"],"id":120}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":20,"column":30},"end":{"row":20,"column":30},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1662528117299,"hash":"d9af2be2ef5d7fddc040d2745eaa5803c4d5f4a8"}