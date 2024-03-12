<?php
declare(strict_types=1);

namespace App\Http\Controllers;


use Laventure\Component\Database\ORM\Persistence\Manager\Contract\EntityManagerInterface;
use Laventure\Component\Http\Message\Response\Response;
use Laventure\Component\Routing\Route\Attributes\Route;
use Laventure\Foundation\Http\Controller\AbstractController;
use Laventure\Foundation\Http\Message\Request\Request;

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

       /**
        * @param EntityManagerInterface $em
       */
       public function __construct(protected EntityManagerInterface $em)
       {
       }


       #[Route('/', methods: ['GET'], name: 'welcome')]
       public function index(Request $request): Response
       {
            dump($this->em);
            dump($request);

            return $this->render('welcome.html', [
                'controller' => __METHOD__
            ]);
       }
}