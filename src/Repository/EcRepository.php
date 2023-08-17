<?php

namespace App\Repository;

use App\Entity\Ec;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Ec|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ec|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ec[]    findAll()
 * @method Ec[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EcRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ec::class);
    }

    // /**
    //  * @return Ec[] Returns an array of Ec objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Ec
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
