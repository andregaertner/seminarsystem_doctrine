<?php
namespace Repositories;

use Doctrine\ORM\EntityRepository;

class KategorienRepository extends \Doctrine\ORM\EntityRepository
{
    public function findDuplicates(\Models\Kategorien $kategrien)
    {
        $em = $this->getEntityManager();
        
        $categorys = $em
            ->getRepository('Models\Kategorien')
            ->findAll();
        ;  
           
       return $categorys; 
    }
}