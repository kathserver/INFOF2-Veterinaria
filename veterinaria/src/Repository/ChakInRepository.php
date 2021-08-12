<?php

namespace App\Repository;

use App\Entity\ChakIn;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ChakIn|null find($id, $lockMode = null, $lockVersion = null)
 * @method ChakIn|null findOneBy(array $criteria, array $orderBy = null)
 * @method ChakIn[]    findAll()
 * @method ChakIn[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ChakInRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ChakIn::class);
    }

    // /**
    //  * @return ChakIn[] Returns an array of ChakIn objects
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
    public function findOneBySomeField($value): ?ChakIn
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
