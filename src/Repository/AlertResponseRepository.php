<?php

namespace App\Repository;

use App\Entity\AlertResponse;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AlertResponse>
 *
 * @method AlertResponse|null find($id, $lockMode = null, $lockVersion = null)
 * @method AlertResponse|null findOneBy(array $criteria, array $orderBy = null)
 * @method AlertResponse[]    findAll()
 * @method AlertResponse[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AlertResponseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AlertResponse::class);
    }

//    /**
//     * @return AlertResponse[] Returns an array of AlertResponse objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?AlertResponse
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
