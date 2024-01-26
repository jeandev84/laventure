<?php

use Laventure\Component\Http\Kernel\Contract\HttpKernelInterface;
use Laventure\Component\Http\Message\Response\Response;
use Laventure\Foundation\Application;
use Laventure\Foundation\Http\Message\Request\Request;

/** @var Application $app */
/** @var HttpKernelInterface $kernel */
/** @var Response $response */

/*
|----------------------------------------------------------------------
|   Laventure
|
|   Author      :   Jean-Claude
|   Email       :   jeanyao@ymail.com
|   Occupation  :   Backend PHP Developer
|   GITLAB      :   https://github.com/jeandev84/laventure
|
|----------------------------------------------------------------------
*/



define('START',  microtime(true));



/*
|----------------------------------------------------------------------
|   Autoload dependencies of application
|----------------------------------------------------------------------
*/

require_once __DIR__.'/../vendor/autoload.php';



/*
|-------------------------------------------------------
|    Get instance of Application
|-------------------------------------------------------
*/

$app = require_once __DIR__.'/../bootstrap/app.php';



/*
|-------------------------------------------------------
|    Get instance of Kernel
|-------------------------------------------------------
*/

$kernel = $app->get(HttpKernelInterface::class);


/*
|-------------------------------------------------------
|    Get Response
|-------------------------------------------------------
*/

$response = $kernel->handle(
    $request = Request::createFromGlobals()
);



/*
|-------------------------------------------------------
|    Send all headers to navigator
|-------------------------------------------------------
*/
$response->send();




/*
|-------------------------------------------------------
|    Terminate application
|-------------------------------------------------------
*/
$kernel->terminate($request, $response);