<?php

namespace App\Repository;

use App\Entity\Hospitalizacion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Hospitalizacion|null find($id, $lockMode = null, $lockVersion = null)
 * @method Hospitalizacion|null findOneBy(array $criteria, array $orderBy = null)
 * @method Hospitalizacion[]    findAll()
 * @method Hospitalizacion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HospitalizacionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Hospitalizacion::class);
    }

    // /**
    //  * @return Hospitalizacion[] Returns an array of Hospitalizacion objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Hospitalizacion
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
