<?php

namespace App\Repository;

use App\Entity\Lego;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Lego>
 */
class LegoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Lego::class);
    }

    /**
     * @return Lego[] Returns an array of Lego objects filtered by category
     */
    public function findAllByCollection(string $id): array
    {
        return $this->createQueryBuilder('l')
            // Premier parametre de andWhere est écris par rapport à l'entité et non par rapport au nom dans la base de données
            ->andWhere('l.Collection = :collection')
            ->setParameter('collection', $id)
            ->orderBy('l.id', 'ASC')
            ->getQuery()
            ->getResult();
    }
    public function findAllIsNotPremium(): array
    {
        return $this->createQueryBuilder('l')
            ->join('l.Collection', 'c')
            ->where('c.premium = :premium')
            ->setParameter('premium', 0)
            ->orderBy('l.id', 'ASC')
            ->getQuery()
            ->getResult();
    }



    //    public function findOneBySomeField($value): ?Lego
    //    {
    //        return $this->createQueryBuilder('l')
    //            ->andWhere('l.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
