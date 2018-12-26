<?php

namespace App\Repository;

use App\Entity\Afspraak;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Afspraak|null find($id, $lockMode = null, $lockVersion = null)
 * @method Afspraak|null findOneBy(array $criteria, array $orderBy = null)
 * @method Afspraak[]    findAll()
 * @method Afspraak[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AfspraakRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Afspraak::class);
    }

    // /**
    //  * @return Afspraak[] Returns an array of Afspraak objects
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
    public function findOneBySomeField($value): ?Afspraak
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
