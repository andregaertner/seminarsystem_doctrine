<?php
use Webmasters\Doctrine\ORM\Util\ArrayMapper;
use Models\Benutzer, Models\Kategorien, Models\Seminare, Models\Seminartermine;

// hole alle Seminare mit den Feldern id und titel
$seminare = $em->getRepository('Models\Seminare')->findAll('id, titel');

// Daten holen
$seminartermin = $em
    ->getRepository('Models\Seminartermine')
    ->find($_REQUEST['id'])
;  

// Daten eintragen
if($_POST)
{
    ArrayMapper::setEntity($seminartermin)->setData($_POST);
    
    $validator = $em->getValidator($seminartermin);
    if ($validator->isValid()) {
        
        // hole die Seminar ID  
        $seminar = $em->getRepository('Models\Seminare')->find($_POST['seminar_id']);  

        // Füge in die Tabelle den Contrain des Seminars ein
        $seminar->addSeminartermin($seminartermin);

        // jetzt einfügen 
        $seminartermin->setSeminar($seminar);


        $em->persist($seminartermin);

        $em->flush();
        
        // Nachricht ausgeben
        set_message('Seminartermin wurde aktualisiert.');
        
        // Umleitung bei erfolgreicher speicherung
        redirect('index.php?action=seminars_dates');
    }

    $errors = $validator->getErrors();
    
}

$view = 'edit_seminartermin'; 
$seminartermin || error404();