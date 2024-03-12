<?php

use App\Http\Controllers\WelcomeController;
use Laventure\Component\Routing\Router\Router;

return function (Router $router) {
    /*
    $router->registerControllers([
       WelcomeController::class
    ]);
    */

    return $router;
};
