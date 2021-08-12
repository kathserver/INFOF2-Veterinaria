<?php

namespace App\Repository;

use App\Entity\Descuento;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Descuento|null find($id, $lockMode = null, $lockVersion = null)
 * @method Descuento|null findOneBy(array $criteria, array $orderBy = null)
 * @method Descuento[]    findAll()
 * @method Descuento[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DescuentoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Descuento::class);
    }

    // /**
    //  * @return Descuento[] Returns an array of Descuento objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Descuento
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
