<?php
declare(strict_types=1);

namespace App\ORM\Persistence\Repository;


use App\ORM\Persistence\Entity\Foo;
use Laventure\Component\Database\ORM\Persistence\Manager\Contract\EntityManagerInterface;
use Laventure\Component\Database\ORM\Persistence\Repository\ServiceEntityRepository;



/**
 * @extends ServiceEntityRepository<Foo>
 *
 * @method Foo|null find($id, $lockMode = null, $lockVersion = null)
 * @method Foo|null findOneBy(array $criteria, array $orderBy = null)
 * @method Foo[]    findAll()
 * @method Foo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
*/
class FooRepository extends ServiceEntityRepository
{
      /**
       * @param EntityManagerInterface $em
      */
      public function __construct(EntityManagerInterface $em)
      {
          parent::__construct($em, Foo::class);
      }


//    /**
//     * @return Foo[] Returns an array of Foo objects
//    */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('f.id', 'ASC')
//            ->limit(10)
//            ->getQuery()
//            ->fetchAll()
//        ;
//    }

//    public function findOneBySomeField($value): ?Foo
//    {
//        return $this->createQueryBuilder('f')
//            ->andWhere('f.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->fetchOne();
//
//    }
}