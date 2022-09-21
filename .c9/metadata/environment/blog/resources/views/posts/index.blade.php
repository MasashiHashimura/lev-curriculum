{"filter":false,"title":"index.blade.php","tooltip":"/blog/resources/views/posts/index.blade.php","undoManager":{"mark":42,"position":42,"stack":[[{"start":{"row":11,"column":0},"end":{"row":12,"column":0},"action":"remove","lines":["        [<a href='/posts/create'>create</a>]",""],"id":2},{"start":{"row":10,"column":0},"end":{"row":11,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":18,"column":25},"end":{"row":19,"column":0},"action":"insert","lines":["",""],"id":3},{"start":{"row":19,"column":0},"end":{"row":19,"column":20},"action":"insert","lines":["                    "]}],[{"start":{"row":19,"column":20},"end":{"row":19,"column":62},"action":"insert","lines":["<a href=\"\">{{ $post->category->name }}</a>"],"id":4}],[{"start":{"row":19,"column":0},"end":{"row":20,"column":0},"action":"remove","lines":["                    <a href=\"\">{{ $post->category->name }}</a>",""],"id":5}],[{"start":{"row":18,"column":25},"end":{"row":19,"column":0},"action":"insert","lines":["",""],"id":6},{"start":{"row":19,"column":0},"end":{"row":19,"column":20},"action":"insert","lines":["                    "]}],[{"start":{"row":19,"column":20},"end":{"row":22,"column":1},"action":"insert","lines":["public function index(Category $category)","{","    return view('categories.index')->with(['posts' => $category->getByCategory()]);","}"],"id":7}],[{"start":{"row":19,"column":0},"end":{"row":22,"column":1},"action":"remove","lines":["                    public function index(Category $category)","{","    return view('categories.index')->with(['posts' => $category->getByCategory()]);","}"],"id":8}],[{"start":{"row":19,"column":0},"end":{"row":19,"column":4},"action":"insert","lines":["    "],"id":9}],[{"start":{"row":19,"column":4},"end":{"row":19,"column":8},"action":"insert","lines":["    "],"id":10}],[{"start":{"row":19,"column":8},"end":{"row":19,"column":12},"action":"insert","lines":["    "],"id":11}],[{"start":{"row":19,"column":12},"end":{"row":19,"column":16},"action":"insert","lines":["    "],"id":12}],[{"start":{"row":19,"column":16},"end":{"row":19,"column":20},"action":"insert","lines":["    "],"id":13}],[{"start":{"row":19,"column":20},"end":{"row":19,"column":99},"action":"insert","lines":["<a href=\"/categories/{{ $post->category->id }}\">{{ $post->category->name }}</a>"],"id":14}],[{"start":{"row":19,"column":0},"end":{"row":20,"column":0},"action":"remove","lines":["                    <a href=\"/categories/{{ $post->category->id }}\">{{ $post->category->name }}</a>",""],"id":15,"ignore":true}],[{"start":{"row":19,"column":0},"end":{"row":20,"column":0},"action":"insert","lines":["                    <a href=\"/categories/{{ $post->category->id }}\">{{ $post->category->name }}</a>",""],"id":16,"ignore":true}],[{"start":{"row":8,"column":10},"end":{"row":9,"column":8},"action":"insert","lines":["","        "],"id":17}],[{"start":{"row":9,"column":8},"end":{"row":9,"column":32},"action":"insert","lines":["@extends('layouts.app')　"],"id":18}],[{"start":{"row":10,"column":0},"end":{"row":10,"column":4},"action":"insert","lines":["    "],"id":19},{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"insert","lines":["    "]},{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"insert","lines":["    "]},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "]},{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"insert","lines":["    "]},{"start":{"row":15,"column":0},"end":{"row":15,"column":4},"action":"insert","lines":["    "]},{"start":{"row":16,"column":0},"end":{"row":16,"column":4},"action":"insert","lines":["    "]},{"start":{"row":17,"column":0},"end":{"row":17,"column":4},"action":"insert","lines":["    "]},{"start":{"row":18,"column":0},"end":{"row":18,"column":4},"action":"insert","lines":["    "]},{"start":{"row":19,"column":0},"end":{"row":19,"column":4},"action":"insert","lines":["    "]},{"start":{"row":20,"column":0},"end":{"row":20,"column":4},"action":"insert","lines":["    "]},{"start":{"row":21,"column":0},"end":{"row":21,"column":4},"action":"insert","lines":["    "]},{"start":{"row":22,"column":0},"end":{"row":22,"column":4},"action":"insert","lines":["    "]},{"start":{"row":23,"column":0},"end":{"row":23,"column":4},"action":"insert","lines":["    "]},{"start":{"row":24,"column":0},"end":{"row":24,"column":4},"action":"insert","lines":["    "]},{"start":{"row":25,"column":0},"end":{"row":25,"column":4},"action":"insert","lines":["    "]},{"start":{"row":26,"column":0},"end":{"row":26,"column":4},"action":"insert","lines":["    "]},{"start":{"row":27,"column":0},"end":{"row":27,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":9,"column":32},"end":{"row":10,"column":0},"action":"insert","lines":["",""],"id":20},{"start":{"row":10,"column":0},"end":{"row":10,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":9,"column":31},"end":{"row":9,"column":32},"action":"remove","lines":["　"],"id":21},{"start":{"row":9,"column":30},"end":{"row":9,"column":31},"action":"remove","lines":[")"]}],[{"start":{"row":9,"column":30},"end":{"row":9,"column":31},"action":"insert","lines":[")"],"id":22}],[{"start":{"row":10,"column":8},"end":{"row":10,"column":27},"action":"insert","lines":["@section('content')"],"id":23}],[{"start":{"row":28,"column":18},"end":{"row":29,"column":0},"action":"insert","lines":["",""],"id":24},{"start":{"row":29,"column":0},"end":{"row":29,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":29,"column":8},"end":{"row":29,"column":12},"action":"remove","lines":["    "],"id":25}],[{"start":{"row":29,"column":8},"end":{"row":29,"column":19},"action":"insert","lines":["@endsection"],"id":26}],[{"start":{"row":10,"column":27},"end":{"row":11,"column":0},"action":"insert","lines":["",""],"id":27},{"start":{"row":11,"column":0},"end":{"row":11,"column":8},"action":"insert","lines":["        "]},{"start":{"row":11,"column":8},"end":{"row":12,"column":0},"action":"insert","lines":["",""]},{"start":{"row":12,"column":0},"end":{"row":12,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":12,"column":8},"end":{"row":12,"column":30},"action":"insert","lines":["{{Auth::user()->name}}"],"id":28}],[{"start":{"row":12,"column":30},"end":{"row":13,"column":0},"action":"insert","lines":["",""],"id":29},{"start":{"row":13,"column":0},"end":{"row":13,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":28,"column":18},"end":{"row":29,"column":0},"action":"insert","lines":["",""],"id":30},{"start":{"row":29,"column":0},"end":{"row":29,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":29,"column":12},"end":{"row":37,"column":10},"action":"insert","lines":["    <div>","        @foreach($questions as $question)","            <div>","              <a href=\"https://teratail.com/questions/{{ $question['id'] }}\">","                {{ $question['title'] }}","              </a>","             </div>","        @endforeach","    </div>"],"id":31}],[{"start":{"row":29,"column":12},"end":{"row":29,"column":16},"action":"remove","lines":["    "],"id":32}],[{"start":{"row":30,"column":0},"end":{"row":30,"column":4},"action":"insert","lines":["    "],"id":33},{"start":{"row":31,"column":0},"end":{"row":31,"column":4},"action":"insert","lines":["    "]},{"start":{"row":32,"column":0},"end":{"row":32,"column":4},"action":"insert","lines":["    "]},{"start":{"row":33,"column":0},"end":{"row":33,"column":4},"action":"insert","lines":["    "]},{"start":{"row":34,"column":0},"end":{"row":34,"column":4},"action":"insert","lines":["    "]},{"start":{"row":35,"column":0},"end":{"row":35,"column":4},"action":"insert","lines":["    "]},{"start":{"row":36,"column":0},"end":{"row":36,"column":4},"action":"insert","lines":["    "]},{"start":{"row":37,"column":0},"end":{"row":37,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":30,"column":0},"end":{"row":30,"column":4},"action":"insert","lines":["    "],"id":34},{"start":{"row":31,"column":0},"end":{"row":31,"column":4},"action":"insert","lines":["    "]},{"start":{"row":32,"column":0},"end":{"row":32,"column":4},"action":"insert","lines":["    "]},{"start":{"row":33,"column":0},"end":{"row":33,"column":4},"action":"insert","lines":["    "]},{"start":{"row":34,"column":0},"end":{"row":34,"column":4},"action":"insert","lines":["    "]},{"start":{"row":35,"column":0},"end":{"row":35,"column":4},"action":"insert","lines":["    "]},{"start":{"row":36,"column":0},"end":{"row":36,"column":4},"action":"insert","lines":["    "]},{"start":{"row":37,"column":0},"end":{"row":37,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":15,"column":4},"end":{"row":15,"column":5},"action":"insert","lines":["{"],"id":35},{"start":{"row":15,"column":5},"end":{"row":15,"column":6},"action":"insert","lines":["}"]},{"start":{"row":15,"column":6},"end":{"row":15,"column":7},"action":"insert","lines":["{"]},{"start":{"row":15,"column":7},"end":{"row":15,"column":8},"action":"insert","lines":["}"]}],[{"start":{"row":15,"column":6},"end":{"row":15,"column":7},"action":"remove","lines":["{"],"id":36},{"start":{"row":15,"column":5},"end":{"row":15,"column":6},"action":"remove","lines":["}"]}],[{"start":{"row":15,"column":5},"end":{"row":15,"column":6},"action":"insert","lines":["{"],"id":37},{"start":{"row":15,"column":6},"end":{"row":15,"column":7},"action":"insert","lines":["}"]}],[{"start":{"row":15,"column":6},"end":{"row":15,"column":7},"action":"insert","lines":["d"],"id":38},{"start":{"row":15,"column":7},"end":{"row":15,"column":8},"action":"insert","lines":["d"]}],[{"start":{"row":15,"column":8},"end":{"row":15,"column":9},"action":"insert","lines":[" "],"id":39}],[{"start":{"row":15,"column":8},"end":{"row":15,"column":9},"action":"remove","lines":[" "],"id":40}],[{"start":{"row":15,"column":8},"end":{"row":15,"column":9},"action":"insert","lines":["("],"id":41},{"start":{"row":15,"column":9},"end":{"row":15,"column":10},"action":"insert","lines":[")"]}],[{"start":{"row":15,"column":9},"end":{"row":15,"column":10},"action":"insert","lines":["$"],"id":42},{"start":{"row":15,"column":10},"end":{"row":15,"column":11},"action":"insert","lines":["p"]},{"start":{"row":15,"column":11},"end":{"row":15,"column":12},"action":"insert","lines":["o"]},{"start":{"row":15,"column":12},"end":{"row":15,"column":13},"action":"insert","lines":["s"]},{"start":{"row":15,"column":13},"end":{"row":15,"column":14},"action":"insert","lines":["t"]}],[{"start":{"row":15,"column":14},"end":{"row":15,"column":15},"action":"insert","lines":["s"],"id":43}],[{"start":{"row":15,"column":0},"end":{"row":16,"column":0},"action":"remove","lines":["    {{dd($posts)}}",""],"id":44}]]},"ace":{"folds":[],"scrolltop":11,"scrollleft":0,"selection":{"start":{"row":15,"column":0},"end":{"row":15,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":40,"state":"start","mode":"ace/mode/php_laravel_blade"}},"timestamp":1663667811371,"hash":"eadf0c938ade0c7860c5b2322501fcd0e9db6b41"}