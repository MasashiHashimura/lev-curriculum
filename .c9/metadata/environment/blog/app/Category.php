{"filter":false,"title":"Category.php","tooltip":"/blog/app/Category.php","undoManager":{"mark":24,"position":24,"stack":[[{"start":{"row":10,"column":0},"end":{"row":16,"column":1},"action":"insert","lines":["//Postに対するリレーション","","//「1対多」の関係なので'posts'と複数形に","public function posts()   ","{","    return $this->hasMany('App\\Post');  ","}"],"id":2}],[{"start":{"row":13,"column":5},"end":{"row":13,"column":6},"action":"remove","lines":["c"],"id":3},{"start":{"row":13,"column":4},"end":{"row":13,"column":5},"action":"remove","lines":["i"]},{"start":{"row":13,"column":3},"end":{"row":13,"column":4},"action":"remove","lines":["l"]},{"start":{"row":13,"column":2},"end":{"row":13,"column":3},"action":"remove","lines":["b"]},{"start":{"row":13,"column":1},"end":{"row":13,"column":2},"action":"remove","lines":["u"]},{"start":{"row":13,"column":0},"end":{"row":13,"column":1},"action":"remove","lines":["p"]}],[{"start":{"row":13,"column":0},"end":{"row":13,"column":1},"action":"insert","lines":["p"],"id":4},{"start":{"row":13,"column":1},"end":{"row":13,"column":2},"action":"insert","lines":["u"]},{"start":{"row":13,"column":2},"end":{"row":13,"column":3},"action":"insert","lines":["b"]},{"start":{"row":13,"column":3},"end":{"row":13,"column":4},"action":"insert","lines":["k"]}],[{"start":{"row":13,"column":3},"end":{"row":13,"column":4},"action":"remove","lines":["k"],"id":5}],[{"start":{"row":13,"column":3},"end":{"row":13,"column":4},"action":"insert","lines":["l"],"id":6},{"start":{"row":13,"column":4},"end":{"row":13,"column":5},"action":"insert","lines":["i"]},{"start":{"row":13,"column":5},"end":{"row":13,"column":6},"action":"insert","lines":["c"]}],[{"start":{"row":6,"column":0},"end":{"row":9,"column":1},"action":"remove","lines":["class Category extends Model","{","    //","}"],"id":7},{"start":{"row":5,"column":0},"end":{"row":6,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":5,"column":0},"end":{"row":6,"column":0},"action":"insert","lines":["",""],"id":8}],[{"start":{"row":6,"column":0},"end":{"row":9,"column":1},"action":"insert","lines":["class Category extends Model","{","    //","}"],"id":9}],[{"start":{"row":8,"column":6},"end":{"row":9,"column":0},"action":"insert","lines":["",""],"id":10},{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":9,"column":4},"end":{"row":12,"column":1},"action":"insert","lines":["public function posts()   ","{","    return $this->hasMany('App\\Post');  ","}"],"id":11}],[{"start":{"row":8,"column":6},"end":{"row":8,"column":29},"action":"insert","lines":["「1対多」の関係なので'posts'と複数形に"],"id":12}],[{"start":{"row":15,"column":0},"end":{"row":20,"column":1},"action":"remove","lines":["","//「1対多」の関係なので'posts'と複数形に","public function posts()   ","{","    return $this->hasMany('App\\Post');  ","}"],"id":13}],[{"start":{"row":14,"column":0},"end":{"row":15,"column":0},"action":"remove","lines":["//Postに対するリレーション",""],"id":14}],[{"start":{"row":7,"column":1},"end":{"row":8,"column":0},"action":"insert","lines":["",""],"id":15},{"start":{"row":8,"column":0},"end":{"row":8,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":8,"column":4},"end":{"row":9,"column":0},"action":"insert","lines":["//Postに対するリレーション",""],"id":16}],[{"start":{"row":9,"column":0},"end":{"row":10,"column":0},"action":"remove","lines":["",""],"id":17}],[{"start":{"row":8,"column":0},"end":{"row":8,"column":4},"action":"insert","lines":["    "],"id":18},{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"insert","lines":["    "]},{"start":{"row":10,"column":0},"end":{"row":10,"column":4},"action":"insert","lines":["    "]},{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"insert","lines":["    "]},{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"insert","lines":["    "]},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":10,"column":4},"end":{"row":10,"column":8},"action":"remove","lines":["    "],"id":19}],[{"start":{"row":9,"column":4},"end":{"row":9,"column":8},"action":"remove","lines":["    "],"id":20}],[{"start":{"row":8,"column":4},"end":{"row":8,"column":8},"action":"remove","lines":["    "],"id":21}],[{"start":{"row":12,"column":44},"end":{"row":13,"column":0},"action":"insert","lines":["",""],"id":22},{"start":{"row":13,"column":0},"end":{"row":13,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":13,"column":4},"end":{"row":13,"column":8},"action":"remove","lines":["    "],"id":23},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"remove","lines":["    "]},{"start":{"row":12,"column":44},"end":{"row":13,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":13,"column":5},"end":{"row":14,"column":0},"action":"insert","lines":["",""],"id":24},{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"insert","lines":["    "]},{"start":{"row":14,"column":4},"end":{"row":15,"column":0},"action":"insert","lines":["",""]},{"start":{"row":15,"column":0},"end":{"row":15,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":15,"column":4},"end":{"row":18,"column":1},"action":"insert","lines":["public function getByCategory(int $limit_count = 5)","{","     return $this->posts()->with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);","}"],"id":25}],[{"start":{"row":16,"column":0},"end":{"row":16,"column":4},"action":"insert","lines":["    "],"id":26},{"start":{"row":17,"column":0},"end":{"row":17,"column":4},"action":"insert","lines":["    "]},{"start":{"row":18,"column":0},"end":{"row":18,"column":4},"action":"insert","lines":["    "]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":20,"column":0},"end":{"row":20,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":3,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1663034212108,"hash":"dab7c960b0eaa93b997f605e9ee2f5fb46a23fc6"}