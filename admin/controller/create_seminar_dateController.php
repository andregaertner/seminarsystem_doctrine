<?php
use Webmasters\Doctrine\ORM\Util\ArrayMapper;
use Models\Benutzer, Models\Kategorien, Models\Seminare, Models\Seminartermine;

$seminare = $em->getRepository('Models\Seminare')->findAll('id, titel');

// Seminartermin speichern
if ($_POST) 
{
    
    // hole die Seminar ID  
    $seminar = $em->getRepository('Models\Seminare')->find($_POST['seminar_id']);  

    // Instanz der Seminartermine Tabelle da sie dort eingefügt wird 
    $seminartermin = new Seminartermine($_POST);
    
    // Daten aus dem Post Array
    ArrayMapper::setEntity($seminartermin)->setData($_POST);

    $validator = $em->getValidator($seminartermin);
    if ($validator->isValid()) {
        
        // Füge in die Tabelle den Constraint des Seminars ein
        $seminar->addSeminartermin($seminartermin);

        // jetzt einfügen 
        $seminartermin->setSeminar($seminar);

        // sql string übergeben
        $em->persist($seminartermin);

        $em->flush();

        set_message('Seminartermin wurde angelegt.');
        redirect('index.php?action=seminars_dates');
    }

    $errors = $validator->getErrors();

    $view = 'create_seminar'; 

}


$view = 'create_seminar_date'; 