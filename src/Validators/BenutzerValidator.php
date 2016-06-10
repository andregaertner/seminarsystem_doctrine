<?php
namespace Validators;

use Webmasters\Doctrine\ORM\EntityValidator;
use Webmasters\Doctrine\ORM\Util;

class BenutzerValidator extends EntityValidator
{
    protected $_minLength = 8;
   
    /**
     * @method filterRegex
     * @param type $wert
     * @param type $regex
     * @return type
     */
    public function filterRegex($wert, $regex)
    {
        return filter_var(
            $wert,
            FILTER_VALIDATE_REGEXP,
            array (
                'options' => array('regexp' => $regex)
                )
        );        
    }   
   
   
    /**
     * @method validateAnrede
     * @param string $anrede
     */
    public function validateAnrede($anrede)
    {
        if(empty($anrede))
        {
            $this->addError('Das Feld Anrede ist leer.');
        }
        elseif(mb_strlen($anrede) > 5)
        {
            $this->addError('Die Anrede sollte 5 Zeichen nicht überschreiten.');
        }
    }
    
    /**
     * @method validateVorname
     * @param string $vorname
     */
    public function validateVorname($vorname)
    {
        if(empty($vorname))
        {
            $this->addError('Das Feld Vorname ist leer.');
        }
        // prüfung ob der Name nur buchstaben und leerzeichen enthält
        elseif(!preg_match("/^[a-zA-Z ]*$/", $vorname))
        {
            $this->addError('Das Feld Vorname darf nur Buchstaben enthalten.');
        }
        elseif(mb_strlen($vorname) > 15)
        {
            $this->addError('Das Feld Vorname sollte 15 Zeichen nicht überschreiten.');
        }
    }
    
    /**
     * @method validateNachname
     * @param string $nachname
     */
    public function validateNachname($nachname)
    {
        if(empty($nachname))
        {
            $this->addError('Das Feld Nachname ist leer.');
        }
        // prüfung ob der Name nur buchstaben und leerzeichen enthält
        elseif(!preg_match("/^[a-zA-Z ]*$/", $nachname))
        {
            $this->addError('Das Feld Nachname darf nur Buchstaben enthalten.');
        }
        elseif(mb_strlen($nachname) > 20)
        {
            $this->addError('Das Feld Nachname sollte 20 Zeichen nicht überschreiten.');
        }
    }
    
    /**
     * @method validateEmail
     * @param string $email
     */
    public function validateEmail($email)
    {
        // prüfung auf leeres input
        if(empty($email))
        {
            $this->addError('Das Feld Email ist leer.');
        }
        // prüfung auf korrekte email
        elseif(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $this->addError('Das ist keine gültige Email.');
        }        
    }   
   
    
    /**
     * @method validateAdmin
     *  
     */  
    public function validateAdmin($admin)
    {
        if(empty($admin))
        {
            $this->addError('Das Feld Admin ist leer.');
        }
    }
    
    /**
     * @method validatePassword
     * @param string $password
     */
    public function validatePasswort($password)
    {
        $entity = $this->getEntity(); // komplettes Benutzer Objekt
        
        // Ermittlung aller benutzen Zeichen
        $usedChars = count_chars($password, 1);
        
        // Es kommt min. ein Buchstabe A-Z vor
        $hasLetters = $this->filterRegex($password, '/[A-Z]+/');
        
        // Es kommt min. ein Buchstabe A-Z vor
        $hasSmallLetters = $this->filterRegex($password, '/[a-z]+/');
        
        // Es kommt min. eine Zahl vor
        $hasNumbers = $this->filterRegex($password, '/\d+/');
        
        // Es kommt min. ein Sonderzeichen vor
        $hasSpecialChars = $this->filterRegex($password, '/[_\W]+/');
        
        // prüfung auf leeres input feld
        if(empty($password))
        {
            $this->addError('Das Feld Passwort ist leer');
        }    
        // Prüfung auf Länge des Passwort muss größer als 8 Zeichen lang sein
        elseif(strlen($password) < 8)
        {
            $this->addError(sprintf('Das Passwort sollte mindestens %d Zeichen lang sein.',$this->_minLength));
        }
        // prüfung ob das feld 50% unterschiedliche zeichen enthält
        elseif(count($usedChars) < (strlen($password) / 2))
        {
            $this->addError('Das Passwort sollte zu mindestens 50 Prozent unterschiedliche Zeichen enthalten.');
        }
        // prüfung ob das passwort groß klein sonderzeichen und zahlen enthalten 
        elseif(
            ($hasLetters === false) ||
            ($hasSmallLetters === false) ||
            ($hasNumbers === false) ||
            ($hasSpecialChars === false)
        ){
            $this->addError('Das Passwort sollte Großbuchstaben, Kleinbuchstaben, Zahlen und Sonderzeichen enthalten.');
        }
        // prüfung auf leeres input feld 
        elseif((
            $entity->getEmail() &&
            strstr($password, $entity->getEmail()) !== false    
            )
        ){
            $this->addError('Das Passwort sollte keine privaten Daten enthalten');
        }        
    } 
          
}