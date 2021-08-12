<?php

namespace App\Repository;

use App\Entity\ChekIn;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ChekIn|null find($id, $lockMode = null, $lockVersion = null)
 * @method ChekIn|null findOneBy(array $criteria, array $orderBy = null)
 * @method ChekIn[]    findAll()
 * @method ChekIn[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ChekInRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ChekIn::class);
    }

    // /**
    //  * @return ChekIn[] Returns an array of ChekIn objects
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
    public function findOneBySomeField($value): ?ChekIn
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
