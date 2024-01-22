<?php

/*
|-------------------------------------------------------------------
|    Bootstrap application
|    * That is container will be bind all services of your application
|-------------------------------------------------------------------
*/

use App\Http\Kernel;
use Laventure\Component\Http\Kernel\Contract\HttpKernelInterface;
use Laventure\Foundation\Application;

$app = new Application(
    realpath(__DIR__.'/../')
);



/*
|-------------------------------------------------------------------
|    Binds important interfaces of application
|-------------------------------------------------------------------
*/
$app->singletons([
    HttpKernelInterface::class => Kernel::class
]);


return $app;