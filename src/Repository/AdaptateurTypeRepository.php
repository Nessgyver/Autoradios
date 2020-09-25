<?php

namespace App\Repository;

use App\Entity\AdaptateurType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AdaptateurType|null find($id, $lockMode = null, $lockVersion = null)
 * @method AdaptateurType|null findOneBy(array $criteria, array $orderBy = null)
 * @method AdaptateurType[]    findAll()
 * @method AdaptateurType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdaptateurTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AdaptateurType::class);
    }

    // /**
    //  * @return AdaptateurType[] Returns an array of AdaptateurType objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AdaptateurType
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
