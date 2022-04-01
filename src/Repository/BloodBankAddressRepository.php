<?php

namespace App\Repository;

use App\Entity\BloodBankAddress;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method BloodBankAddress|null find($id, $lockMode = null, $lockVersion = null)
 * @method BloodBankAddress|null findOneBy(array $criteria, array $orderBy = null)
 * @method BloodBankAddress[]    findAll()
 * @method BloodBankAddress[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BloodBankAddressRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BloodBankAddress::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(BloodBankAddress $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(BloodBankAddress $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return BloodBankAddress[] Returns an array of BloodBankAddress objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BloodBankAddress
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
