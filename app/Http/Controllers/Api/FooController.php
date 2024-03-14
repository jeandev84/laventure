<?php
namespace App\Http\Controllers\Api;


use Laventure\Component\Http\Message\Response\Response;
use Laventure\Component\Http\Message\Response\JsonResponse;
use Laventure\Component\Routing\Route\Attributes\Route;
use Laventure\Foundation\Http\Controller\AbstractController;
use Laventure\Foundation\Http\Message\Request\Request;


/**
 * FooController
 *
 * @package App\Http\Controllers\Api
 *
 * <Generated By Laventure 14/03/2024 11:23:57>
*/
class FooController extends AbstractController
{
        


        #[Route('/api/foo', methods: ['GET|HEAD'], name: 'api.foo.index')]
        public function index(Request $request): JsonResponse
        {
               // TODO some logic here
        }


        #[Route('/api/foo/{id}', methods: ['GET'], name: 'api.foo.show')]
        public function show(Request $request): JsonResponse
        {
               // TODO some logic here
        }


        #[Route('/api/foo', methods: ['POST'], name: 'api.foo.store')]
        public function store(Request $request): JsonResponse
        {
               // TODO some logic here
        }


        #[Route('/api/foo/{id}', methods: ['PUT|PATCH'], name: 'api.foo.update')]
        public function update(Request $request): JsonResponse
        {
               // TODO some logic here
        }


        #[Route('/api/foo/{id}', methods: ['DELETE'], name: 'api.foo.destroy')]
        public function destroy(Request $request): JsonResponse
        {
               // TODO some logic here
        }
}