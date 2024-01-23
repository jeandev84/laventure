<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use Laventure\Component\Routing\Route\Attributes\Route;
use Laventure\Foundation\Http\Controller\AbstractController;
use Laventure\Foundation\Http\Request\Request;
use Laventure\Foundation\Http\Response\Response;

/**
 * WelcomeController
 *
 * @author Jean-Claude <jeanyao@ymail.com>
 *
 * @license https://github.com/jeandev84/laventure-framework/blob/master/LICENSE
 *
 * @package  App\Http\Controllers
*/
class WelcomeController extends AbstractController
{

       #[Route('/', methods: ['GET'], name: 'welcome')]
       public function index(Request $request): Response
       {
            #dump($request);

            return $this->render('welcome.html');
       }
}