<?php

namespace App\Repository;

use App\Entity\BraceletCode;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<BraceletCode>
 *
 * @method BraceletCode|null find($id, $lockMode = null, $lockVersion = null)
 * @method BraceletCode|null findOneBy(array $criteria, array $orderBy = null)
 * @method BraceletCode[]    findAll()
 * @method BraceletCode[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BraceletCodeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BraceletCode::class);
    }

//    /**
//     * @return BraceletCode[] Returns an array of BraceletCode objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('b.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?BraceletCode
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
