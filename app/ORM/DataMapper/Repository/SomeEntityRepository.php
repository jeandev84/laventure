<?php
declare(strict_types=1);

namespace App\ORM\Mapper\Repository;


use App\ORM\Mapper\Entity\SomeEntity;
use Laventure\Component\Database\ORM\Persistence\Manager\Contract\EntityManagerInterface;
use Laventure\Component\Database\ORM\Persistence\Repository\ServiceEntityRepository;



/**
 * @extends ServiceEntityRepository<SomeEntity>
 *
 * @method SomeEntity|null find($id, $lockMode = null, $lockVersion = null)
 * @method SomeEntity|null findOneBy(array $criteria, array $orderBy = null)
 * @method SomeEntity[]    findAll()
 * @method SomeEntity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 *
 * <Generated By Laventure 14/03/2024 15:55:15>
*/
class SomeEntityRepository extends ServiceEntityRepository
{
      /**
       * @param EntityManagerInterface $em
      */
      public function __construct(EntityManagerInterface $em)
      {
          parent::__construct($em, SomeEntity::class);
      }


//    /**
//     * @return SomeEntity[] Returns an array of SomeEntity objects
//    */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->limit(10)
//            ->getQuery()
//            ->fetchAll()
//        ;
//    }

//    public function findOneBySomeField($value): ?SomeEntity
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->fetchOne();
//
//    }
}