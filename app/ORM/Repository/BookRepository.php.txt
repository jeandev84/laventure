<?php
declare(strict_types=1);

namespace App\ORM\Repository;

use App\ORM\Entity\Book;

/**
 * BookRepository
 *
 * @author Jean-Claude <jeanyao@ymail.com>
 *
 * @license https://github.com/jeandev84/laventure-framework/blob/master/LICENSE
 *
 * @package  App\ORM\Repository
*/
class BookRepository
{
      protected string $classname;
      public function __construct()
      {
          $this->classname = Book::class;
      }


      /**
       * @return Book[]
      */
      public function findAll(): array
      {
          $books = [];
          for($i=1; $i <= 10; $i++) {
              $books[] = new Book("Tile$i", "Description$i", floatval(100 + $i));
          }
          return $books;
      }



      public function findAllAsArray(): array
      {
          $data = [];
          foreach ($this->findAll() as $book) {
              $data[] = $book->toArray();
          }
          return $data;
      }
}