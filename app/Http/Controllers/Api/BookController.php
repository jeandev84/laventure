<?php
declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\ORM\Repository\BookRepository;
use Laventure\Component\Http\Message\Response\JsonResponse;
use Laventure\Component\Routing\Route\Attributes\Route;
use Laventure\Foundation\Http\Controller\AbstractController;
use Laventure\Foundation\Http\Message\Request\Request;

/**
 * BookController
 *
 * @author Jean-Claude <jeanyao@ymail.com>
 *
 * @license https://github.com/jeandev84/laventure-framework/blob/master/LICENSE
 *
 * @package  App\Http\Controllers\Api
 */
#[Route('api/books', name: 'api.books.')]
class BookController extends AbstractController
{

     /**
      * @param BookRepository $bookRepository
     */
     public function __construct(
         protected BookRepository $bookRepository
     )
     {
     }


     #[Route('', methods: ['GET'], name: 'list')]
     public function index(Request $request): JsonResponse
     {
         $books = $this->bookRepository->findAllAsArray();

         return $this->json($books);
     }
}