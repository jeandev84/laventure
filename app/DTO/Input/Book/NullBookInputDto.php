<?php
declare(strict_types=1);

namespace App\DTO\Input\Book;

/**
 * NullBookInputDto
 *
 * @author Jean-Claude <jeanyao@ymail.com>
 *
 * @license https://github.com/jeandev84/laventure-framework/blob/master/LICENSE
 *
 * @package  App\DTO\Input\Book
*/
class NullBookInputDto extends BookInputDto
{
     public function __construct()
     {
         parent::__construct(null, null);
     }
}