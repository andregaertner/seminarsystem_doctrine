<?php
namespace Models;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Webmasters\Doctrine\ORM\Util;

/**
 * @ORM\Entity
 * @ORM\Table(name="benutzer")
 */
class Benutzer
{
    
    
    /**
     * @ORM\ManyToMany(targetEntity="Seminartermine", inversedBy="users")
     * @ORM\JoinTable(name="nimmt_teil")
     */
    private $seminartermine;
        
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id = 0;
    
    /**
     * @ORM\Column(type="string", length=10)
     * 
     */
    private $anrede = '';
    
    /**
     * @ORM\Column(type="string", length=40)
     * 
     */
    private $vorname = '';
    
    /**
     * @ORM\Column(type="string", length=40)
     * 
     */
    private $nachname = '';
    
    /**
     * @ORM\Column(type="string", length=50, unique=true)
     * 
     */
    private $email = '';
    
    /**
     * @ORM\Column(type="string", length=20)
     * 
     */
    private $passwort = '';
    
    /**
     * @ORM\Column(type="datetime")
	 * @Gedmo\Timestampable(on="create")
     * 
     */
    private $registriert_seit;
    
    /**
     * @ORM\Column(type="integer")
     * 
     */
    private $admin;
    
    
    
    public function __construct(array $data = array())
    {
        Util\ArrayMapper::setEntity($this)->setData($data);
        $this->seminartermine = new \Doctrine\Common\Collections\ArrayCollection();
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
    
    public function getAnrede()
    {
        return $this->anrede;
    }
    
    public function setAnrede($anrede)
    {
        $this->anrede = $anrede;
    }
    
    public function getVorname()
    {
        return $this->vorname;
    }
    
    public function setVorname($vorname)
    {
        $this->vorname = $vorname;
    }
    
    
    public function getNachname()
    {
        return $this->nachname;
    }
    
    public function setNachname($nachname)
    {
        $this->nachname = $nachname;
    }
    
    
    public function getEmail()
    {
        return $this->email;
    }
    
    public function setEmail($email)
    {
        $this->email = $email;
    }
    
    
    public function getPasswort()
    {
        return $this->passwort;
    }
    
    public function setPasswort($passwort)
    {
        $this->passwort = $passwort;
    }
    
    
    public function getRegistriert_seit()
    {
        return new Util\DateTime($this->registriert_seit);
    }
	
    public function setRegistriert_seit($registriert_seit)
    {
        if(empty($registriert_seit))
        { 
                $registriert_seit = 'now'; 
        }

        $this->registriert_seit  = new Util\DateTime($registriert_seit );
    }
    
    public function getAdmin()
    {
        return $this->admin;
    }
	
	public function setAdmin($admin)
    {
        $this->admin = $admin;
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
    public function removeSeminartermin(Seminartermine $seminartermin)
    {
        $this->seminartermine->removeElement($seminartermin);
    }
    
}