<?php
namespace Models;

use Doctrine\ORM\Mapping as ORM;
use Webmasters\Doctrine\ORM\Util;

/**
 * @ORM\Entity
 * @ORM\Table(name="seminare")
 */
class Seminare
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=120)
     */
    private $titel = '';
    
    /**
     * @ORM\Column(type="text")
     */
    private $beschreibung = '';
    
    /**
     * @ORM\Column(type="decimal", precision=6, scale=2)
     */
    private $preis = '';

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $kategorie;

    # Fremschlüsselbeziehung mappedBy
    /**
     * @ORM\OneToMany(targetEntity="Seminartermine", mappedBy="seminar")
     */
    private $seminartermine; 
    
    
    public function __construct(array $data = array())
    {
        Util\ArrayMapper::setEntity($this)->setData($data);
        $this->seminartermine = new \Doctrine\Common\Collections\ArrayCollection(); // Existens eines Seminartermin-Sammlung als Collection bzw. als Verwaltung Instanz erzeugt
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
    
    
    public function getTitel()
    {
        return $this->titel;
    }
    
    public function setTitel($titel)
    {
        $this->titel = $titel;
    }
    
    public function getBeschreibung()
    {
        return $this->beschreibung;
    }
    
    public function setBeschreibung($beschreibung)
    {
        $this->beschreibung = $beschreibung;
    }
    
    public function getPreis()
    {
        return $this->preis;
    }
    
    public function setPreis($preis)
    {
        $this->preis = $preis;
    }
    
    public function getKategorie()
    {
        return $this->kategorie;
    }
    
    public function setKategorie($kategorie)
    {
        $this->kategorie = $kategorie;
    }
    
    public function getSeminartermine()
    {
        return $this->seminartermine;
    }

    # Delegator Methods $seminartermine
    # Collection bzw. Sammlung entleeren
    public function clearSeminartermine()
    {
        $this->seminartermine->clear();
    }

    # add Collection (Mit Type-Hinting  wird sichergestellt, dass nur Objekte der Klasse Seminartermine hinzugefügt werden können)
    public function addSeminartermin(Seminartermine $seminartermin)
    {
        $this->seminartermine->add($seminartermin);
    }

    # contains (Editieren von Datensätzen ist eine Prüfung nötig, ob ein Objekt in einer Sammlung enthalten ist)
    public function hasSeminartermin(Seminartermine $seminartermin)
    {
        return $this->seminartermine->contains($seminartermin);
    }

    # removeElement (Objekt aus der Sammlung entfernen)
    public function removeSeminartermin()
    {
        $this->seminartermine->removeElement($seminartermin);
    }
    
    
    public function __toString() 
    {
        return $this->getTitel();
    }
    
}