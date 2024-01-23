<?php
return [

    /*
     |------------------------------------------------------------------
     |   Here define global default layout
     |   You must set your view path
     |   - layout    : it's the name of global default layout
     |                 name of default layout if you use php extension for templating (default.php)
     |   - extension : (html, php, twig)
     |   - if you set name it will be used inside all template
     |   - compress  : it's used for compressing content page for optimization rendering.
     |------------------------------------------------------------------
    */
    'path'      => 'template/views',
    'extension' => 'html', // html, php, twig
    'cache'     =>  true,
    'cacheDir'  =>  '/storage/cache/app/views',
    'compress'  =>  true // false
];