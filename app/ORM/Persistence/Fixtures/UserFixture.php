<?php
declare(strict_types=1);

namespace App\ORM\Persistence\Fixtures;

use Laventure\Component\Database\ORM\Manager\Contract\EntityManagerInterface;
use Laventure\Component\Database\ORM\Manager\Fixtures\Fixture;

/**
 * UserFixture
 *
 * @author Jean-Claude <jeanyao@ymail.com>
 *
 * @license https://github.com/jeandev84/laventure-framework/blob/master/LICENSE
 *
 * @package  App\ORM\Persistence\Fixtures
*/
class UserFixture extends Fixture
{

    /**
     * @inheritDoc
    */
    public function load(EntityManagerInterface $em): void
    {
         /*
          $user = new User();
          $user->setSomething('added some data');
          $em->persist($foo);
          $em->flush();
         */
    }
}