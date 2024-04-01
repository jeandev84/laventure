<?php
declare(strict_types=1);

namespace App\ORM\Mapping\Repository;


use App\ORM\Mapping\Entity\Book;
use Laventure\Component\Database\ORM\Manager\Contract\EntityManagerInterface;
use Laventure\Component\Database\ORM\Manager\Repository\ServiceEntityRepository;


/**
 * @extends ServiceEntityRepository<Book>
 *
 * @method Book|null find($id, $lockMode = null, $lockVersion = null)
 * @method Book|null findOneBy(array $criteria, array $orderBy = null)
 * @method Book[]    findAll()
 * @method Book[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
*/
class BookRepository extends ServiceEntityRepository
{
      /**
       * @param EntityManagerInterface $em
      */
      public function __construct(EntityManagerInterface $em)
      {
          parent::__construct($em, Book::class);
      }


//    /**
//     * @return Book[] Returns an array of Book objects
//    */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('b.id', 'ASC')
//            ->limit(10)
//            ->getQuery()
//            ->fetchAll()
//        ;
//    }

//    public function findOneBySomeField($value): ?Book
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->fetchOne();
//
//    }
}