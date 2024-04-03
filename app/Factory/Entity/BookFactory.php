<?php
declare(strict_types=1);

namespace App\Factory\Entity;

use App\DTO\Input\Book\BookInputDto;
use App\ORM\Persistence\Entity\Book;

/**
 * BookFactory
 *
 * @author Jean-Claude <jeanyao@ymail.com>
 *
 * @license https://github.com/jeandev84/laventure-framework/blob/master/LICENSE
 *
 * @package  App\Factory
*/
class BookFactory
{
      /**
       * @param BookInputDto $dto
       * @return Book
      */
      public static function createFromDto(BookInputDto $dto): Book
      {
            $book = new Book();
            $book->setTitle($dto->title);
            $book->setDescription($dto->description);
            $book->setPrice($dto->price);
            return $book;
      }
}