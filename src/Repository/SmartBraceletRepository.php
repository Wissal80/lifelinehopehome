<?php

namespace App\Repository;

use App\Entity\SmartBracelet;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SmartBracelet>
 *
 * @method SmartBracelet|null find($id, $lockMode = null, $lockVersion = null)
 * @method SmartBracelet|null findOneBy(array $criteria, array $orderBy = null)
 * @method SmartBracelet[]    findAll()
 * @method SmartBracelet[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SmartBraceletRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SmartBracelet::class);
    }

//    /**
//     * @return SmartBracelet[] Returns an array of SmartBracelet objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?SmartBracelet
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
