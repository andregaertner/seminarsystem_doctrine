<?php
namespace Validators;

use Webmasters\Doctrine\ORM\EntityValidator;
use Webmasters\Doctrine\ORM\Util;

class SeminareValidator extends EntityValidator
{
    /**
     * @method validateTitel
     * @param string $titel
     */
    public function validateTitel($titel)
    {
        if(empty($titel))
        {
            $this->addError('Das Feld Titel ist leer.');
        }
        elseif(mb_strlen($titel) > 25)
        {
            $this->addError('Das Feld Titel sollte 15 Zeichen nicht überschreiten.');
        }
    }
    
    /**
     * @method validateBeschreibung
     * @param string $beschreibung
     */
    public function validateBeschreibung($beschreibung)
    {
        if(empty($beschreibung))
        {
            $this->addError('Das Feld Beschreibung ist leer.');
        }
        // prüfung auf länge der Zeichen max 60 Zeichen erlaubt
        elseif(mb_strlen($beschreibung) > 60)
        {
            $this->addError('Das Feld Beschreibung sollte 60 Zeichen nicht überschreiten.');
        }
    }
    
    /**
     * @method validatePreis
     * @param string $preis
     */
    public function validatePreis($preis)
    {
        // ersetzt , durch . im Subject
        $preis = str_replace(',', '.', $preis);
        
        // prüfung auf leeres input feld
        if(empty($preis))
        {
            $this->addError('Das Feld Preis ist leer.');
        }
        // prüfung auf zahlen und punkt, komma
        elseif(!is_numeric($preis))
        {
            $this->addError('Es dürfen nur Zahlen von "0-9", "," und "." eingegeben werden.');
            // todo: komma durch punkz ersetzen mit str_replace()
        }    
    }
    
    /**
     * @method validateKategorien
     * @param array $kategorien
     */
    public function validateKategorie($kategorie)
    {
        // prüfung auf leeres input feld
        if(empty($kategorie))
        {
            $this->addError('Das Feld Kategorien ist leer.');
        }
    }
    
}
