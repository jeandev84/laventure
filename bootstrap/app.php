<?php

/*
|-------------------------------------------------------------------
|    Bootstrap application
|    * That is container will be bind all services of your application
|-------------------------------------------------------------------
*/

use App\Http\Kernel;
use Laventure\Component\Console\Kernel\ConsoleKernelInterface;
use Laventure\Component\Container\Container;
use Laventure\Component\Http\Kernel\Contract\HttpKernelInterface;
use Laventure\Foundation\Application;


/*
|-------------------------------------------------------------------
|    Make new instance of application and add some settings
|-------------------------------------------------------------------
*/


$app = (new Application(__DIR__.'/../'));
$app->name('Laventure')
    ->version('1.0');


/*
|-------------------------------------------------------------------
|    Binds important interfaces of application
|-------------------------------------------------------------------
*/
$app->singletons([
    HttpKernelInterface::class => Kernel::class,
    ConsoleKernelInterface::class => \App\Console\Kernel::class
]);


return $app;