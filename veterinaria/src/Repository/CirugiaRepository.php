<?php

namespace App\Repository;

use App\Entity\Cirugia;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Cirugia|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cirugia|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cirugia[]    findAll()
 * @method Cirugia[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CirugiaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cirugia::class);
    }

    // /**
    //  * @return Cirugia[] Returns an array of Cirugia objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Cirugia
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
