{"filter":false,"title":"create.blade.php","tooltip":"/blog/resources/views/posts/create.blade.php","undoManager":{"mark":17,"position":17,"stack":[[{"start":{"row":14,"column":18},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":15,"column":0},"end":{"row":15,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":15,"column":12},"end":{"row":22,"column":6},"action":"insert","lines":["<div class=\"category\">","    <h2>Category</h2>","    <select name=\"post[category_id]\">","        @foreach($categories as $category)","            <option value=\"{{ $category->id }}\">{{ $category->name }}</option>","        @endforeach","    </select>","</div>"],"id":3}],[{"start":{"row":16,"column":0},"end":{"row":16,"column":4},"action":"insert","lines":["    "],"id":4},{"start":{"row":17,"column":0},"end":{"row":17,"column":4},"action":"insert","lines":["    "]},{"start":{"row":18,"column":0},"end":{"row":18,"column":4},"action":"insert","lines":["    "]},{"start":{"row":19,"column":0},"end":{"row":19,"column":4},"action":"insert","lines":["    "]},{"start":{"row":20,"column":0},"end":{"row":20,"column":4},"action":"insert","lines":["    "]},{"start":{"row":21,"column":0},"end":{"row":21,"column":4},"action":"insert","lines":["    "]},{"start":{"row":22,"column":0},"end":{"row":22,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":16,"column":0},"end":{"row":16,"column":4},"action":"insert","lines":["    "],"id":5},{"start":{"row":17,"column":0},"end":{"row":17,"column":4},"action":"insert","lines":["    "]},{"start":{"row":18,"column":0},"end":{"row":18,"column":4},"action":"insert","lines":["    "]},{"start":{"row":19,"column":0},"end":{"row":19,"column":4},"action":"insert","lines":["    "]},{"start":{"row":20,"column":0},"end":{"row":20,"column":4},"action":"insert","lines":["    "]},{"start":{"row":21,"column":0},"end":{"row":21,"column":4},"action":"insert","lines":["    "]},{"start":{"row":22,"column":0},"end":{"row":22,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":16,"column":0},"end":{"row":16,"column":4},"action":"insert","lines":["    "],"id":6},{"start":{"row":17,"column":0},"end":{"row":17,"column":4},"action":"insert","lines":["    "]},{"start":{"row":18,"column":0},"end":{"row":18,"column":4},"action":"insert","lines":["    "]},{"start":{"row":19,"column":0},"end":{"row":19,"column":4},"action":"insert","lines":["    "]},{"start":{"row":20,"column":0},"end":{"row":20,"column":4},"action":"insert","lines":["    "]},{"start":{"row":21,"column":0},"end":{"row":21,"column":4},"action":"insert","lines":["    "]},{"start":{"row":22,"column":0},"end":{"row":22,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":14,"column":18},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":7},{"start":{"row":15,"column":0},"end":{"row":15,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":23,"column":18},"end":{"row":24,"column":0},"action":"insert","lines":["",""],"id":8},{"start":{"row":24,"column":0},"end":{"row":24,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":6,"column":10},"end":{"row":7,"column":8},"action":"insert","lines":["","        "],"id":9}],[{"start":{"row":7,"column":8},"end":{"row":7,"column":31},"action":"insert","lines":["@extends('layouts.app')"],"id":10}],[{"start":{"row":7,"column":31},"end":{"row":8,"column":0},"action":"insert","lines":["",""],"id":11},{"start":{"row":8,"column":0},"end":{"row":8,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":9,"column":21},"end":{"row":9,"column":40},"action":"insert","lines":["@section('content')"],"id":12}],[{"start":{"row":9,"column":39},"end":{"row":9,"column":40},"action":"remove","lines":[")"],"id":13},{"start":{"row":9,"column":38},"end":{"row":9,"column":39},"action":"remove","lines":["'"]},{"start":{"row":9,"column":37},"end":{"row":9,"column":38},"action":"remove","lines":["t"]},{"start":{"row":9,"column":36},"end":{"row":9,"column":37},"action":"remove","lines":["n"]},{"start":{"row":9,"column":35},"end":{"row":9,"column":36},"action":"remove","lines":["e"]},{"start":{"row":9,"column":34},"end":{"row":9,"column":35},"action":"remove","lines":["t"]},{"start":{"row":9,"column":33},"end":{"row":9,"column":34},"action":"remove","lines":["n"]},{"start":{"row":9,"column":32},"end":{"row":9,"column":33},"action":"remove","lines":["o"]},{"start":{"row":9,"column":31},"end":{"row":9,"column":32},"action":"remove","lines":["c"]},{"start":{"row":9,"column":30},"end":{"row":9,"column":31},"action":"remove","lines":["'"]},{"start":{"row":9,"column":29},"end":{"row":9,"column":30},"action":"remove","lines":["("]},{"start":{"row":9,"column":28},"end":{"row":9,"column":29},"action":"remove","lines":["n"]}],[{"start":{"row":9,"column":27},"end":{"row":9,"column":28},"action":"remove","lines":["o"],"id":14},{"start":{"row":9,"column":26},"end":{"row":9,"column":27},"action":"remove","lines":["i"]},{"start":{"row":9,"column":25},"end":{"row":9,"column":26},"action":"remove","lines":["t"]},{"start":{"row":9,"column":24},"end":{"row":9,"column":25},"action":"remove","lines":["c"]},{"start":{"row":9,"column":23},"end":{"row":9,"column":24},"action":"remove","lines":["e"]},{"start":{"row":9,"column":22},"end":{"row":9,"column":23},"action":"remove","lines":["s"]},{"start":{"row":9,"column":21},"end":{"row":9,"column":22},"action":"remove","lines":["@"]}],[{"start":{"row":8,"column":8},"end":{"row":8,"column":27},"action":"insert","lines":["@section('content')"],"id":15}],[{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"insert","lines":["    "],"id":16},{"start":{"row":10,"column":0},"end":{"row":10,"column":4},"action":"insert","lines":["    "]},{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"insert","lines":["    "]},{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"insert","lines":["    "]},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "]},{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"insert","lines":["    "]},{"start":{"row":15,"column":0},"end":{"row":15,"column":4},"action":"insert","lines":["    "]},{"start":{"row":16,"column":0},"end":{"row":16,"column":4},"action":"insert","lines":["    "]},{"start":{"row":17,"column":0},"end":{"row":17,"column":4},"action":"insert","lines":["    "]},{"start":{"row":18,"column":0},"end":{"row":18,"column":4},"action":"insert","lines":["    "]},{"start":{"row":19,"column":0},"end":{"row":19,"column":4},"action":"insert","lines":["    "]},{"start":{"row":20,"column":0},"end":{"row":20,"column":4},"action":"insert","lines":["    "]},{"start":{"row":21,"column":0},"end":{"row":21,"column":4},"action":"insert","lines":["    "]},{"start":{"row":22,"column":0},"end":{"row":22,"column":4},"action":"insert","lines":["    "]},{"start":{"row":23,"column":0},"end":{"row":23,"column":4},"action":"insert","lines":["    "]},{"start":{"row":24,"column":0},"end":{"row":24,"column":4},"action":"insert","lines":["    "]},{"start":{"row":25,"column":0},"end":{"row":25,"column":4},"action":"insert","lines":["    "]},{"start":{"row":26,"column":0},"end":{"row":26,"column":4},"action":"insert","lines":["    "]},{"start":{"row":27,"column":0},"end":{"row":27,"column":4},"action":"insert","lines":["    "]},{"start":{"row":28,"column":0},"end":{"row":28,"column":4},"action":"insert","lines":["    "]},{"start":{"row":29,"column":0},"end":{"row":29,"column":4},"action":"insert","lines":["    "]},{"start":{"row":30,"column":0},"end":{"row":30,"column":4},"action":"insert","lines":["    "]},{"start":{"row":31,"column":0},"end":{"row":31,"column":4},"action":"insert","lines":["    "]},{"start":{"row":32,"column":0},"end":{"row":32,"column":4},"action":"insert","lines":["    "]},{"start":{"row":33,"column":0},"end":{"row":33,"column":4},"action":"insert","lines":["    "]},{"start":{"row":34,"column":0},"end":{"row":34,"column":4},"action":"insert","lines":["    "]},{"start":{"row":35,"column":0},"end":{"row":35,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":35,"column":58},"end":{"row":36,"column":0},"action":"insert","lines":["",""],"id":17},{"start":{"row":36,"column":0},"end":{"row":36,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":36,"column":8},"end":{"row":36,"column":12},"action":"remove","lines":["    "],"id":18}],[{"start":{"row":36,"column":8},"end":{"row":36,"column":19},"action":"insert","lines":["@endsection"],"id":19}]]},"ace":{"folds":[],"scrolltop":90,"scrollleft":0,"selection":{"start":{"row":36,"column":19},"end":{"row":36,"column":19},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":5,"state":"start","mode":"ace/mode/php_laravel_blade"}},"timestamp":1663122969805,"hash":"7ef11ff8eb70b1470480d336a234388a3f121bc8"}