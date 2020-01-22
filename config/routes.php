<?php
return array(
        'news/([a-z]+)' => 'news/category/$1', //actionCategory in NewsController
	'news/([0-9]+)' => 'news/view/$1', //actionView in NewsController
	'news' => 'news/list', //actionList in NewsController
        'index' => 'articles/list', //actionList in ArticlesController
        'articles/([a-z]+)' => 'articles/category/$1', //actionCategory in ArticlesController
    	'articles/([0-9]+)' => 'articles/view/$1', //actionView in ArticlesController
        'articles' => 'articles/list', //actionList in ArticlesController
        'gallery' => 'articles/gallery', //actionGallery in ArticlesController
        'about' => 'articles/about', //actionAbout in ArticlesController
        'contact' => 'articles/contact', //actionContact in ArticlesController
        '.+' => 'articles/list', //actionList in ArticlesController
	'' => 'articles/list', //actionList in ArticlesController
    );