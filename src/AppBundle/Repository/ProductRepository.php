<?php

namespace AppBundle\Repository;


use Doctrine\ORM\EntityRepository;


class ProductRepository extends  EntityRepository implements ProductRepositoryInterface
{

    public function getProductById(int $id)
    {
        $qb = $this->createQueryBuilder('p');
        $qb
            ->select('p')
            ->where('p.id = :id')
            ->setParameter('id', $id);

        return $qb->getQuery()->getOneOrNullResult();
    }


    public function getAllProduct()
    {
        $qb = $this->createQueryBuilder('p');
        $qb->select('p');
        return $qb->getQuery()->getResult();
    }



    /**
     * @param $id
     * @return mixed
     */
    public function get($id) {
        return $this->find($id);
    }

    public function flush() {
        $this->getEntityManager()->flush();
    }

    public function remove($object) {
        $this->getEntityManager()->remove($object);
        $this->getEntityManager()->flush();
    }

    public function persist($object) {
        $this->getEntityManager()->persist($object);
    }

    public function update($object) {
        $this->getEntityManager()->merge($object);
    }

    public function save($object, $persist = false, $flush = true)
    {
        if ($persist) {
            $this->persist($object);
        }
        if ($flush) {
            $this->flush();
        }
        return $object;
    }

    /**
     * @param $object
     * @return mixed
     */
    public function persistAndFlush($object) {
        $this->getEntityManager()->persist($object);
        $this->getEntityManager()->flush($object);
    }

    public function updateAndFlush($object) {
        $this->getEntityManager()->merge($object);
        $this->getEntityManager()->flush($object);
    }



}