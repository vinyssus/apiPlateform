<?php

namespace App\Repository;

use App\Entity\DragonTreasor;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DragonTreasor>
 *
 * @method DragonTreasor|null find($id, $lockMode = null, $lockVersion = null)
 * @method DragonTreasor|null findOneBy(array $criteria, array $orderBy = null)
 * @method DragonTreasor[]    findAll()
 * @method DragonTreasor[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DragonTreasorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DragonTreasor::class);
    }

    public function save(DragonTreasor $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(DragonTreasor $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return DragonTreasor[] Returns an array of DragonTreasor objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('d.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?DragonTreasor
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
