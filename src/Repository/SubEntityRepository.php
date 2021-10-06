<?php

namespace App\Repository;

use App\Entity\SubEntity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SubEntity|null find($id, $lockMode = null, $lockVersion = null)
 * @method SubEntity|null findOneBy(array $criteria, array $orderBy = null)
 * @method SubEntity[]    findAll()
 * @method SubEntity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SubEntityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SubEntity::class);
    }

    // /**
    //  * @return SubEntity[] Returns an array of SubEntity objects
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
    public function findOneBySomeField($value): ?SubEntity
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
