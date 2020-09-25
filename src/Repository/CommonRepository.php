<?php

namespace App\Repository;

use App\Entity\Common;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Common|null find($id, $lockMode = null, $lockVersion = null)
 * @method Common|null findOneBy(array $criteria, array $orderBy = null)
 * @method Common[]    findAll()
 * @method Common[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CommonRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Common::class);
    }

    // /**
    //  * @return Common[] Returns an array of Common objects
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
    public function findOneBySomeField($value): ?Common
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
