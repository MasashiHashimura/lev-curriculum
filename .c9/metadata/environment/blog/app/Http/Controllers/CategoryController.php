{"filter":false,"title":"CategoryController.php","tooltip":"/blog/app/Http/Controllers/CategoryController.php","undoManager":{"mark":16,"position":16,"stack":[[{"start":{"row":9,"column":19},"end":{"row":9,"column":20},"action":"remove","lines":["r"],"id":2}],[{"start":{"row":9,"column":18},"end":{"row":9,"column":19},"action":"remove","lines":["e"],"id":3},{"start":{"row":9,"column":17},"end":{"row":9,"column":18},"action":"remove","lines":["l"]},{"start":{"row":9,"column":16},"end":{"row":9,"column":17},"action":"remove","lines":["l"]},{"start":{"row":9,"column":15},"end":{"row":9,"column":16},"action":"remove","lines":["o"]},{"start":{"row":9,"column":14},"end":{"row":9,"column":15},"action":"remove","lines":["r"]},{"start":{"row":9,"column":13},"end":{"row":9,"column":14},"action":"remove","lines":["t"]},{"start":{"row":9,"column":12},"end":{"row":9,"column":13},"action":"remove","lines":["n"]},{"start":{"row":9,"column":11},"end":{"row":9,"column":12},"action":"remove","lines":["o"]},{"start":{"row":9,"column":10},"end":{"row":9,"column":11},"action":"remove","lines":["C"]},{"start":{"row":9,"column":9},"end":{"row":9,"column":10},"action":"remove","lines":["t"]},{"start":{"row":9,"column":8},"end":{"row":9,"column":9},"action":"remove","lines":["s"]}],[{"start":{"row":9,"column":7},"end":{"row":9,"column":8},"action":"remove","lines":["o"],"id":4},{"start":{"row":9,"column":6},"end":{"row":9,"column":7},"action":"remove","lines":["P"]}],[{"start":{"row":9,"column":6},"end":{"row":9,"column":7},"action":"insert","lines":["C"],"id":5},{"start":{"row":9,"column":7},"end":{"row":9,"column":8},"action":"insert","lines":["A"]}],[{"start":{"row":9,"column":7},"end":{"row":9,"column":8},"action":"remove","lines":["A"],"id":6}],[{"start":{"row":9,"column":7},"end":{"row":9,"column":8},"action":"insert","lines":["a"],"id":7},{"start":{"row":9,"column":8},"end":{"row":9,"column":9},"action":"insert","lines":["t"]},{"start":{"row":9,"column":9},"end":{"row":9,"column":10},"action":"insert","lines":["e"]}],[{"start":{"row":9,"column":6},"end":{"row":9,"column":10},"action":"remove","lines":["Cate"],"id":8},{"start":{"row":9,"column":6},"end":{"row":9,"column":14},"action":"insert","lines":["Category"]}],[{"start":{"row":9,"column":14},"end":{"row":9,"column":15},"action":"insert","lines":["C"],"id":9},{"start":{"row":9,"column":15},"end":{"row":9,"column":16},"action":"insert","lines":["o"]},{"start":{"row":9,"column":16},"end":{"row":9,"column":17},"action":"insert","lines":["n"]},{"start":{"row":9,"column":17},"end":{"row":9,"column":18},"action":"insert","lines":["t"]},{"start":{"row":9,"column":18},"end":{"row":9,"column":19},"action":"insert","lines":["o"]}],[{"start":{"row":9,"column":18},"end":{"row":9,"column":19},"action":"remove","lines":["o"],"id":10}],[{"start":{"row":9,"column":18},"end":{"row":9,"column":19},"action":"insert","lines":["r"],"id":11},{"start":{"row":9,"column":19},"end":{"row":9,"column":20},"action":"insert","lines":["o"]},{"start":{"row":9,"column":20},"end":{"row":9,"column":21},"action":"insert","lines":["l"]},{"start":{"row":9,"column":21},"end":{"row":9,"column":22},"action":"insert","lines":["l"]},{"start":{"row":9,"column":22},"end":{"row":9,"column":23},"action":"insert","lines":["e"]},{"start":{"row":9,"column":23},"end":{"row":9,"column":24},"action":"insert","lines":["r"]}],[{"start":{"row":11,"column":4},"end":{"row":50,"column":5},"action":"remove","lines":["public function index(Post $post)","    {","        return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);  ","    }","    ","    public function show(Post $post)","    {","        return view('posts/show')->with(['post' => $post]);","        return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);","    }","    ","    public function create(Category $category)","    {","        return view('posts/create')->with(['categories' => $category->get()]);;","    }","    ","    public function store(Post $post, PostRequest $request)","    {","        $input = $request['post'];","        $post->fill($input)->save();","        return redirect('/posts/' . $post->id);","    }","    ","    public function edit(Post $post)","    {","        return view('posts/edit')->with(['post' => $post]);","    }","    ","    public function update(PostRequest $request, Post $post)","    {","        $input = $request['post'];","        $post->fill($input)->save();","        return redirect('/posts/' . $post->id);","    }","    ","    public function delete(Post $post)","    {","        $post->delete();","        return redirect('/');","    }"],"id":12}],[{"start":{"row":11,"column":4},"end":{"row":14,"column":1},"action":"insert","lines":["public function getByCategory(int $limit_count = 5)","{","     return $this->posts()->with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);","}"],"id":13}],[{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"insert","lines":["    "],"id":14},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "]},{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":11,"column":0},"end":{"row":14,"column":5},"action":"remove","lines":["    public function getByCategory(int $limit_count = 5)","    {","         return $this->posts()->with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);","    }"],"id":15}],[{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"insert","lines":["    "],"id":16}],[{"start":{"row":11,"column":4},"end":{"row":14,"column":1},"action":"insert","lines":["public function index(Category $category)","{","    return view('categories.index')->with(['posts' => $category->getByCategory()]);","}"],"id":17}],[{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"insert","lines":["    "],"id":18},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "]},{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"insert","lines":["    "]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":8,"column":0},"end":{"row":8,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":14,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1663121095638,"hash":"1b8f5a6eb77c5ee56d291656c4588c61c6d78501"}