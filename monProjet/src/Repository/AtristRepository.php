<?php

namespace App\Repository;

use App\Entity\Atrist;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Atrist>
 *
 * @method Atrist|null find($id, $lockMode = null, $lockVersion = null)
 * @method Atrist|null findOneBy(array $criteria, array $orderBy = null)
 * @method Atrist[]    findAll()
 * @method Atrist[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AtristRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Atrist::class);
    }

//    /**
//     * @return Atrist[] Returns an array of Atrist objects
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

//    public function findOneBySomeField($value): ?Atrist
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
