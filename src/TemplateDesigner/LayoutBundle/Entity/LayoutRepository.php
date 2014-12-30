<?php

namespace TemplateDesigner\LayoutBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * LayoutRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class LayoutRepository extends EntityRepository
{

	public function findLayoutWitOptions($rootName,$position){
		$qb = $this->getEntityManager()->createQueryBuilder();

        $qb ->select('l')
            ->from('TemplateDesignerLayoutBundle:Layout','l')
            ->join('l.root','r')
            ->where($qb->expr()->eq('r.name',':root'))
            ->andWhere($qb->expr()->eq('l.position',':position'))
            ->setParameters(array('root'=>$rootName,'position'=>$position));
            return $qb->getQuery()->getOneOrNullResult();
	}
}
