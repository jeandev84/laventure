<?php
namespace App\Http\Controllers;


use Laventure\Component\Http\Message\Response\Response;
use Laventure\Component\Http\Message\Response\JsonResponse;
use Laventure\Component\Routing\Route\Attributes\Route;
use Laventure\Foundation\Http\Controller\AbstractController;
use Laventure\Foundation\Http\Message\Request\Request;


/**
 * FooController
 *
 * @package App\Http\Controllers
 *
 * <Generated By Laventure 14/03/2024 11:36:14>
*/
class FooController extends AbstractController
{
        


        #[Route('/foo', methods: ['GET|HEAD'], name: 'foo.index')]
        public function index(Request $request): Response
        {
               // TODO some logic here
        }


        #[Route('/foo/{id}', methods: ['GET'], name: 'foo.show')]
        public function show(Request $request): Response
        {
               // TODO some logic here
        }


        #[Route('/foo/create', methods: ['GET'], name: 'foo.create')]
        public function create(Request $request): Response
        {
               // TODO some logic here
        }


        #[Route('/foo/store', methods: ['POST'], name: 'foo.store')]
        public function store(Request $request): Response
        {
               // TODO some logic here
        }


        #[Route('/foo/{id}/edit', methods: ['GET'], name: 'foo.edit')]
        public function edit(Request $request): Response
        {
               // TODO some logic here
        }


        #[Route('/foo/{id}', methods: ['PUT|PATCH'], name: 'foo.update')]
        public function update(Request $request): Response
        {
               // TODO some logic here
        }


        #[Route('/foo/{id}', methods: ['DELETE'], name: 'foo.destroy')]
        public function destroy(Request $request): Response
        {
               // TODO some logic here
        }
}