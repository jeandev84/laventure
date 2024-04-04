<?php
declare(strict_types=1);

namespace App\ORM\Persistence\Fixtures;

use App\DTO\Input\Book\BookInputDto;
use App\DTO\Input\User\UserInputDto;
use App\Factory\Entity\UserFactory;
use App\ORM\Persistence\Entity\User;
use App\Service\Hash\EncryptedPassword;
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
         for ($i = 1; $i <= 10; $i++) {
             $user = new User();
             $user->setUsername("user_{$i}")
                  ->setEmail("user_{$i}@demo.ru")
                  ->setPassword(EncryptedPassword::encrypt('123'))
                  ->setActive(false);
             $em->persist($user);
         }

         $em->flush();
    }






    /**
     * @param EntityManagerInterface $em
     * @return void
    */
    public function loadUsersUsingDto(EntityManagerInterface $em): void
    {
        $userDto = new UserInputDto('john', 'john@demo.ru', '123');

        $userDto->books = [
            new BookInputDto('PHP-book', 'description php book', 35.80),
            new BookInputDto('Delphi-book', 'description delphi book', 20.70),
            new BookInputDto('CSharp-book', 'description csharp book', 25.50),
            new BookInputDto('Golang-book', 'description golang book', 30.00)
        ];

        $user = UserFactory::createUserFromDto($userDto);
        $em->persist($user);
        $em->flush();
    }
}