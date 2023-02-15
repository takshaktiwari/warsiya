<?php

return [
    'install'    =>    [

        // Enable / Disable `adash:install` command
        'command'    =>    env('APP_DEBUG', true),

        /*
		| Modules
		|---------------------
		| Modules are those segments which comes with `takshak/adash`.
		| All modules specified here will be installed after executing `adash:install` command
		|-------------------------------------
		| Available Modules: default, faqs, pages, testimonials
		*/
        'modules'    =>    [
            'default',
            #'faqs',
            #'pages',
            #'testimonials'
        ],

        /*
		| Packages
		|---------------------
		| These are third party packages other than `takshak/adash`.
		| There are several packages which can be used for improvements of project.
		|-------------------------------------
		| Some Packages: takshak/adash-blog, takshak/adash-slider, barryvdh/laravel-debugbar
		*/
        'packages'    =>    [
            #'takshak/adash-blog',
            #'takshak/adash-slider',
            #'barryvdh/laravel-debugbar --dev'
        ],
    ],

    'site'    =>    [
        'name'    =>    'Adash',
        'short_name'    =>    'AD',

        'logo_full'     =>    '',
        'logo_short'     =>    '',
        'favicon'         =>    '',
    ],

    /*
	| Imager
	|---------------------
	| For configuration of package: `takshak/imager`.
	*/
    'imager'    =>    [
        'picsum'    =>    [
            'enable_url'    =>    true,
        ],
        'placeholder'    =>    [
            'enable_url'    =>    true,
        ],
    ],

    /*
    | Agallery
    |---------------------
    | For configuration of package: `takshak/adash-gallery`.
    */
    'gallery'	=>	[
        'install'	=>	[
            // Enable / Disable `adash-gallery:install` command
            'command'	=>	env('APP_DEBUG', true),
        ],
        'cover_image'	=>	[
            'small'	=>	[
                'width'		=>	500,
                'height'	=>	500,
            ],
            'medium'	=>	[
                'width'		=>	1000,
                'height'	=>	600,
            ],
            'large'	=>	[
                'width'		=>	1500,
                'height'	=>	550,
            ]
        ],

        /*
        | Enable or disable routes for front pages, eg:
        | http://127.0.0.1:8000/galleries | (?layout=masonry)
        | http://127.0.0.1:8000/galleries/{gallery:slug} | (?layout=masonry)
        */
        'routes' => true, // Enable or disable routes for front pages

        /**
         * Layout for front pages, possible values are: grid, masonry
         */
        'layout' => 'masonry',
    ],
];
