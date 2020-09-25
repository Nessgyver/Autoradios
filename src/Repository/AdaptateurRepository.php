<?php

namespace App\Repository;

use App\Entity\Adaptateur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Adaptateur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Adaptateur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Adaptateur[]    findAll()
 * @method Adaptateur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdaptateurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Adaptateur::class);
    }

    // /**
    //  * @return Adaptateur[] Returns an array of Adaptateur objects
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
    public function findOneBySomeField($value): ?Adaptateur
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
