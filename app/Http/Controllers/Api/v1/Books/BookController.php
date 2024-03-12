<?php
declare(strict_types=1);

namespace App\Http\Controllers\Api\v1\Books;

use Laventure\Component\Http\Message\Response\JsonResponse;
use Laventure\Component\Http\Message\Response\Response;
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
 * @package  App\Http\Controllers\Api\v1\Books
*/
class BookController extends AbstractController
{

    #[Route('/api/v1/books', methods: ['GET'], name: 'api.v1.books.index')]
    public function index(Request $request): JsonResponse
    {
        return $this->json([
            'books' => []
        ]);
    }
}