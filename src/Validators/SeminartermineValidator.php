<?php
namespace Validators;

use Webmasters\Doctrine\ORM\EntityValidator;
use Webmasters\Doctrine\ORM\Util;

class SeminartermineValidator extends EntityValidator
{
    
    
    /**
     * @method validateBeginn
     * @param string $beginn
     */
    public function validateBeginn($beginn)
    {
        $now = new Util\DateTime('now');
        
        if(!$beginn->isValid())
        {
            $this->addError('Das Feld Beginn muss einen korrekten Datumswert enthalten.');
        }
        elseif(!$now->isValidClosingDate($beginn))
        {
            $this->addError('Das Feld Beginn darf kein Datum in der Vergangenheit enthalten.');
        }    
    }
    
    /**
     * @method validateEnde
     * @param string $ende
     */
    public function validateEnde($ende)
    {
        $now = new Util\DateTime('now');
        
        if(!$ende->isValid())
        {
            $this->addError('Das Feld Ende muss einen korrekten Datumswert enthalten.');
        }
        elseif(!$now->isValidClosingDate($ende))
        {
            $this->addError('Das Feld Ende darf kein Datum in der Vergangenheit enthalten.');
        }  
    }
    
    /**
     * @method validateRaum
     * @param string $raum
     */
    public function validateRaum($raum)
    {
        if(empty($raum))
        {
            $this->addError('Das Feld Raum ist leer.');
        }
    }
    
    /**
     * @method validateSeminar
     * @param string $seminar_id
     */
    public function validateSeminar_id($seminar_id)
    {
        
        if(empty($seminar_id))
        {
            $this->addError('Das Feld Seminar ist leer.');
        }
        elseif(is_numeric ($seminar_id))
        {
            $this->addError('Das Feld Seminar muss eine Zahl beinhalten.');
        }
    }
    
}