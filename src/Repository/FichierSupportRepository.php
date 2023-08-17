<?php

namespace App\Repository;

use App\Entity\FichierSupport;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FichierSupport|null find($id, $lockMode = null, $lockVersion = null)
 * @method FichierSupport|null findOneBy(array $criteria, array $orderBy = null)
 * @method FichierSupport[]    findAll()
 * @method FichierSupport[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FichierSupportRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FichierSupport::class);
    }

    // /**
    //  * @return FichierSupport[] Returns an array of FichierSupport objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FichierSupport
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
