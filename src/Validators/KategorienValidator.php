<?php
namespace Validators;

use Webmasters\Doctrine\ORM\EntityValidator;
use Webmasters\Doctrine\ORM\Util;

/**
 * @ORM\Entity(repositoryClass="Repositories\KategorienRepository")
 * @ORM\Table(name="kategorien")
 */
class KategorienValidator extends EntityValidator
{
    
    /**
     * @method validateName
     * @param string $kategorie
     */
    public function validateName($name)
    {
        // validierende Object
        //$category = $this->getEntity();
        
        // prüfung ob das Feld leer ist
        if(empty($name))
        {
            $this->addError('Das Feld Name ist leer.');
        }
        // prüfung auf Länge des Strings nach utf-8
        elseif(mb_strlen($name) < 3)
        {
            $this->addError('Der Kategoriename sollte mindestens 3 Zeichen lang sein.');
        }    
        // prüfung ob der Name der Kategorie schon in der Datenbank enthalten ist
        elseif($this->getRepository()->findBy(array('name' =>$name)))
        {
            $this->addError('Die Kategorie ist schon vorhanden.');
        }
        // prüfung ob der Name nur buchstaben und leerzeichen enthält
        elseif(!preg_match("/^[a-zA-Z ]*$/", $name))
        {
            $this->addError('Das Feld Vorname darf nur Buchstaben enthalten.');
        }    
    }
    
}