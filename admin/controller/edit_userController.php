<?php
use Webmasters\Doctrine\ORM\Util\ArrayMapper;
use Models\Benutzer, Models\Kategorien, Models\Seminare, Models\Seminartermine;

// Daten holen
$benutzer = $em
    ->getRepository('Models\Benutzer')
    ->find($_REQUEST['id'])
;  

// Daten eintragen
if($_POST)
{
    
    ArrayMapper::setEntity($benutzer)->setData($_POST);
    
    $validator = $em->getValidator($benutzer);
    if ($validator->isValid()) {
        
        $em->persist($benutzer);
        $em->flush();

        set_message('Benutzer wurde aktualisiert.');
        redirect('index.php?action=users');
    }
    
    
    $errors = $validator->getErrors();
    
}

$view = 'edit_user'; 
$benutzer || error404();