<?php

namespace App\Repository;

use App\Entity\Autoradio;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Autoradio|null find($id, $lockMode = null, $lockVersion = null)
 * @method Autoradio|null findOneBy(array $criteria, array $orderBy = null)
 * @method Autoradio[]    findAll()
 * @method Autoradio[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AutoradioRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Autoradio::class);
    }

    // /**
    //  * @return Autoradio[] Returns an array of Autoradio objects
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
    public function findOneBySomeField($value): ?Autoradio
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
