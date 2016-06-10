<?php
namespace Models;

use Doctrine\ORM\Mapping as ORM;
use Webmasters\Doctrine\ORM\Util;

/**
 * @ORM\Entity
 * @ORM\Table(name="kategorien")
 */
class Kategorien
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string", length=200)
     * 
     */
    private $name = '';
    
    
    public function __construct(array $data = array())
    {
        Util\ArrayMapper::setEntity($this)->setData($data);
    }
    
    
    /* *** Getter Setter *** */
    
    public function getId()
    {
        return $this->id;
    }
    
    public function setId($id)
    {
        $this->id = $id;
    }
    
    
    public function getName()
    {
        return $this->name;
    }
    
    public function setName($name)
    {
        $this->name = $name;
    }
    
}