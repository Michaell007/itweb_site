<?php

namespace App\Repository;

use App\Entity\PageAbout;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PageAbout|null find($id, $lockMode = null, $lockVersion = null)
 * @method PageAbout|null findOneBy(array $criteria, array $orderBy = null)
 * @method PageAbout[]    findAll()
 * @method PageAbout[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PageAboutRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PageAbout::class);
    }

    // /**
    //  * @return PageAbout[] Returns an array of PageAbout objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PageAbout
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
