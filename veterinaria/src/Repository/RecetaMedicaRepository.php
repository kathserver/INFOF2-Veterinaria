<?php

namespace App\Repository;

use App\Entity\RecetaMedica;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method RecetaMedica|null find($id, $lockMode = null, $lockVersion = null)
 * @method RecetaMedica|null findOneBy(array $criteria, array $orderBy = null)
 * @method RecetaMedica[]    findAll()
 * @method RecetaMedica[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RecetaMedicaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RecetaMedica::class);
    }

    // /**
    //  * @return RecetaMedica[] Returns an array of RecetaMedica objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RecetaMedica
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
