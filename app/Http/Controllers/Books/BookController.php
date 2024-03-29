<?php
namespace App\Http\Controllers\Books;


use Laventure\Component\Http\Message\Response\Response;
use Laventure\Component\Http\Message\Response\JsonResponse;
use Laventure\Component\Routing\Route\Attributes\Route;
use Laventure\Foundation\Http\Controller\AbstractController;
use Laventure\Foundation\Http\Message\Request\Request;


/**
 * BookController
 *
 * @package App\Http\Controllers\Books
 *
 * <Generated By Laventure 14/03/2024 12:34:07>
*/
class BookController extends AbstractController
{
        


        #[Route('/books/book', methods: ['GET|HEAD'], name: 'books.book.index')]
        public function index(Request $request): Response
        {
               // TODO some logic here
        }


        #[Route('/books/book/{id}', methods: ['GET'], name: 'books.book.show')]
        public function show(Request $request): Response
        {
               // TODO some logic here
        }


        #[Route('/books/book/create', methods: ['GET'], name: 'books.book.create')]
        public function create(Request $request): Response
        {
               // TODO some logic here
        }


        #[Route('/books/book/store', methods: ['POST'], name: 'books.book.store')]
        public function store(Request $request): Response
        {
               // TODO some logic here
        }


        #[Route('/books/book/{id}/edit', methods: ['GET'], name: 'books.book.edit')]
        public function edit(Request $request): Response
        {
               // TODO some logic here
        }


        #[Route('/books/book/{id}', methods: ['PUT|PATCH'], name: 'books.book.update')]
        public function update(Request $request): Response
        {
               // TODO some logic here
        }


        #[Route('/books/book/{id}', methods: ['DELETE'], name: 'books.book.destroy')]
        public function destroy(Request $request): Response
        {
               // TODO some logic here
        }
}