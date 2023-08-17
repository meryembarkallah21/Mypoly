<?php

namespace App\Repository;

use App\Entity\StatusEc;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method StatusEc|null find($id, $lockMode = null, $lockVersion = null)
 * @method StatusEc|null findOneBy(array $criteria, array $orderBy = null)
 * @method StatusEc[]    findAll()
 * @method StatusEc[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StatusEcRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StatusEc::class);
    }

    // /**
    //  * @return StatusEc[] Returns an array of StatusEc objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?StatusEc
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
