{"filter":false,"title":"2022_09_11_122840_add_image_column_to_posts_table.php","tooltip":"/blog/database/migrations/2022_09_11_122840_add_image_column_to_posts_table.php","ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":17,"column":8},"end":{"row":17,"column":8},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":3,"state":"php-start","mode":"ace/mode/php"}},"hash":"c132609750db06f7ee3377dd4ec3a29b3b85a895","mime":"application/octet-stream","undoManager":{"mark":4,"position":4,"stack":[[{"start":{"row":15,"column":3},"end":{"row":17,"column":11},"action":"remove","lines":["     Schema::table('posts', function (Blueprint $table) {","            //","        });"],"id":2},{"start":{"row":15,"column":2},"end":{"row":15,"column":3},"action":"remove","lines":[" "]},{"start":{"row":15,"column":1},"end":{"row":15,"column":2},"action":"remove","lines":[" "]},{"start":{"row":15,"column":0},"end":{"row":15,"column":1},"action":"remove","lines":[" "]}],[{"start":{"row":15,"column":0},"end":{"row":15,"column":4},"action":"insert","lines":["    "],"id":3}],[{"start":{"row":15,"column":4},"end":{"row":15,"column":8},"action":"insert","lines":["    "],"id":4}],[{"start":{"row":15,"column":8},"end":{"row":17,"column":7},"action":"insert","lines":["Schema::table('posts', function (Blueprint $table) {","        $table->string('image', 100)->nullable();","    });"],"id":5}],[{"start":{"row":17,"column":4},"end":{"row":17,"column":8},"action":"insert","lines":["    "],"id":6}]]},"timestamp":1662867011761}