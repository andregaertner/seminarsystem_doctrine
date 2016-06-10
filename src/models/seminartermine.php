<?php
namespace Models;

use Doctrine\ORM\Mapping as ORM;
use Webmasters\Doctrine\ORM\Util;

/**
 * @ORM\Entity
 * @ORM\Table(name="seminartermine")
 */
class Seminartermine
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $beginn;

    /**
     * @ORM\Column(type="date") 
     */
    private $ende;
    
    /**
     * @ORM\Column(type="string", length=30)
     */
    private $raum;

    /**
     * @ORM\ManyToOne(targetEntity="Seminare", inversedBy="seminartermine")
     */
    private $seminar;
    
    
     /**
     * @ORM\ManyToMany(targetEntity="Benutzer", mappedBy="seminartermine")
     */
    private $users;
    
    
    public function __construct(array $data = array())
    {
        Util\ArrayMapper::setEntity($this)->setData($data);
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
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
    
    public function getBeginn()
    {
        return new Util\DateTime($this->beginn);
    }
    
    public function setBeginn($beginn)
    {
        $this->beginn = new Util\DateTime($beginn);
    }
    
    public function getEnde()
    {
        return new Util\DateTime($this->ende);
    }
    
    public function setEnde($ende)
    {
        $this->ende = new Util\DateTime($ende);
    }
    
    public function getRaum()
    {
        return $this->raum;
    }
    
    public function setRaum($raum)
    {
        $this->raum = $raum;
    }
    
    
    // Behandeln den neuen Fremdschlüsssel für ein Foreignkey
    public function getSeminar()
    {
        return $this->seminar;
    }
    
    public function setSeminar(Seminare $seminar)
    {
        $this->seminar = $seminar;
    }
    
    
    
    public function getUsers()
    {
        return $this->users;
    }

    # Delegator Methods $seminartermine
    # Collection bzw. Sammlung entleeren
    public function clearUsers()
    {
        $this->users->clear();
    }

    # add Collection (Mit Type-Hinting  wird sichergestellt, dass nur Objekte der Klasse Seminartermine hinzugefügt werden können)
    public function addUser(Benutzer $user)
    {
        $this->users->add($user);
    }

    # contains (Editieren von Datensätzen ist eine Prüfung nötig, ob ein Objekt in einer Sammlung enthalten ist)
    public function hasUser(Benutzer $user)
    {
        return $this->users->contains($user);
    }

    # removeElement (Objekt aus der Sammlung entfernen)
    public function removeUsers(Benutzer $user)
    {
        $this->users->removeElement($user);
    }
    
    
    
    public function __toString() 
    {
        return $this->seminar;
    }
    
}