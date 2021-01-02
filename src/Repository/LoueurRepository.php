<?php

namespace App\Repository;

use App\Entity\Loueur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Loueur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Loueur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Loueur[]    findAll()
 * @method Loueur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LoueurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Loueur::class);
    }

    // /**
    //  * @return Loueur[] Returns an array of Loueur objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Loueur
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
