<?php

namespace App\Repository;

use App\Entity\MemberFamily;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MemberFamily|null find($id, $lockMode = null, $lockVersion = null)
 * @method MemberFamily|null findOneBy(array $criteria, array $orderBy = null)
 * @method MemberFamily[]    findAll()
 * @method MemberFamily[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MemberFamilyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MemberFamily::class);
    }

    // /**
    //  * @return MemberFamily[] Returns an array of MemberFamily objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MemberFamily
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
