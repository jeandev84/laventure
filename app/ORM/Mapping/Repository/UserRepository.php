<?php
declare(strict_types=1);

namespace App\ORM\Mapping\Repository;


use App\ORM\Mapping\Entity\User;
use Laventure\Component\Database\ORM\Manager\Contract\EntityManagerInterface;
use Laventure\Component\Database\ORM\Manager\Repository\ServiceEntityRepository;


/**
 * @extends ServiceEntityRepository<User>
 *
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
*/
class UserRepository extends ServiceEntityRepository
{
      /**
       * @param EntityManagerInterface $em
      */
      public function __construct(EntityManagerInterface $em)
      {
          parent::__construct($em, User::class);
      }


//    /**
//     * @return User[] Returns an array of User objects
//    */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('u.id', 'ASC')
//            ->limit(10)
//            ->getQuery()
//            ->fetchAll()
//        ;
//    }

//    public function findOneBySomeField($value): ?User
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->fetchOne();
//
//    }
}