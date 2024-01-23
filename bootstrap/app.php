<?php

/*
|-------------------------------------------------------------------
|    Bootstrap application
|    * That is container will be bind all services of your application
|-------------------------------------------------------------------
*/

use App\Http\Kernel;
use Laventure\Component\Container\Container;
use Laventure\Component\Http\Kernel\Contract\HttpKernelInterface;
use Laventure\Foundation\Application;


require __DIR__.'/constants.php';

/*
|-------------------------------------------------------------------
|    Make new instance of application and add some settings
|-------------------------------------------------------------------
*/


$container = Container::getInstance();
$app = (new Application($container, realpath(__DIR__.'/../')))
       ->name(APP_NAME)
       ->version(APP_VERSION);



/*
|-------------------------------------------------------------------
|    Binds important interfaces of application
|-------------------------------------------------------------------
*/
$app->singleton([
    HttpKernelInterface::class => Kernel::class
]);


return $app;