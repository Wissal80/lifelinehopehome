<?php

namespace App\Repository;

use App\Entity\EmergencyTeam;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<EmergencyTeam>
 *
 * @method EmergencyTeam|null find($id, $lockMode = null, $lockVersion = null)
 * @method EmergencyTeam|null findOneBy(array $criteria, array $orderBy = null)
 * @method EmergencyTeam[]    findAll()
 * @method EmergencyTeam[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EmergencyTeamRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EmergencyTeam::class);
    }

//    /**
//     * @return EmergencyTeam[] Returns an array of EmergencyTeam objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('e.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?EmergencyTeam
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
