<?php

namespace FormArmorBundle\Repository;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\Tools\Pagination\Paginator;
/**
 * InscriptionRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class InscriptionRepository extends \Doctrine\ORM\EntityRepository
{
	public function findLesClientsinscrit($id)
	{
        $query = $this->createQueryBuilder('in')
            ->leftJoin('FormArmorBundle:Session_formation', 'sf', 'in.session_formation = sf.id')
            ->where('in.session_formation = :id')
            ->setParameter('value', '%'.$id.'%')
            ->getQuery();
            $Incriptions = $query->getResult();
          return $Incriptions;
	}
}
