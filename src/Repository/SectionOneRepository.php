<?php

namespace App\Repository;

use App\Entity\SectionOne;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SectionOne|null find($id, $lockMode = null, $lockVersion = null)
 * @method SectionOne|null findOneBy(array $criteria, array $orderBy = null)
 * @method SectionOne[]    findAll()
 * @method SectionOne[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SectionOneRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SectionOne::class);
    }

    // /**
    //  * @return SectionOne[] Returns an array of SectionOne objects
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
    public function findOneBySomeField($value): ?SectionOne
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
