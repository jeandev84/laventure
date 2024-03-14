<?php
namespace App\Http\Controllers\Api;


use Laventure\Component\Http\Message\Response\Response;
use Laventure\Component\Http\Message\Response\JsonResponse;
use Laventure\Component\Routing\Route\Attributes\Route;
use Laventure\Foundation\Http\Controller\AbstractController;
use Laventure\Foundation\Http\Message\Request\Request;


/**
 * BookController
 *
 * @package App\Http\Controllers\Api
 *
 * <Generated By Laventure 14/03/2024 12:34:47>
*/
class BookController extends AbstractController
{
        


        #[Route('/api/book', methods: ['GET|HEAD'], name: 'api.book.index')]
        public function index(Request $request): JsonResponse
        {
               // TODO some logic here
        }


        #[Route('/api/book/{id}', methods: ['GET'], name: 'api.book.show')]
        public function show(Request $request): JsonResponse
        {
               // TODO some logic here
        }


        #[Route('/api/book', methods: ['POST'], name: 'api.book.store')]
        public function store(Request $request): JsonResponse
        {
               // TODO some logic here
        }


        #[Route('/api/book/{id}', methods: ['PUT|PATCH'], name: 'api.book.update')]
        public function update(Request $request): JsonResponse
        {
               // TODO some logic here
        }


        #[Route('/api/book/{id}', methods: ['DELETE'], name: 'api.book.destroy')]
        public function destroy(Request $request): JsonResponse
        {
               // TODO some logic here
        }
}