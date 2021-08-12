<?php

namespace App\Repository;

use App\Entity\Procedimiento;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Procedimiento|null find($id, $lockMode = null, $lockVersion = null)
 * @method Procedimiento|null findOneBy(array $criteria, array $orderBy = null)
 * @method Procedimiento[]    findAll()
 * @method Procedimiento[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProcedimientoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Procedimiento::class);
    }

    // /**
    //  * @return Procedimiento[] Returns an array of Procedimiento objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Procedimiento
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
