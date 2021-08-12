<?php

namespace App\Repository;

use App\Entity\Jaula;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Jaula|null find($id, $lockMode = null, $lockVersion = null)
 * @method Jaula|null findOneBy(array $criteria, array $orderBy = null)
 * @method Jaula[]    findAll()
 * @method Jaula[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class JaulaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Jaula::class);
    }

    // /**
    //  * @return Jaula[] Returns an array of Jaula objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('j.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Jaula
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
