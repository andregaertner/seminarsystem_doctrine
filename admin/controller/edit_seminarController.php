<?php
use Webmasters\Doctrine\ORM\Util\ArrayMapper;
use Models\Benutzer, Models\Kategorien, Models\Seminare, Models\Seminartermine;

// Alle Kategorien holen für select
$kategorien = $em->getRepository('Models\Kategorien')->findAll();

// Datensätze der Id Kategorie holen
$seminar = $em
    ->getRepository('Models\Seminare')
    ->find($_REQUEST['id'])
;  

// Daten eintragen
if($_POST)
{
    ArrayMapper::setEntity($seminar)->setData($_POST);
    
     $validator = $em->getValidator($seminar);
    if ($validator->isValid()) 
    {
        $em->persist($seminar);
        $em->flush();

        set_message('Seminar wurde aktualisiert.');
        redirect('index.php?action=seminars');
    }

    $errors = $validator->getErrors();
    
    

    
}

$view = 'edit_seminar';

// Fehlermeldung bei falschen Paramater aufrufen
$seminar || error404();