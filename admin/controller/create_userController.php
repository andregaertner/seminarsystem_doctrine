<?php
use Webmasters\Doctrine\ORM\Util\ArrayMapper;
use Models\Benutzer, Models\Kategorien, Models\Seminare, Models\Seminartermine;

// Benutzer speichern
if ($_POST) 
{
    $benutzer = new Benutzer();
    ArrayMapper::setEntity($benutzer)->setData($_POST);


    $validator = $em->getValidator($benutzer);
    if ($validator->isValid()) {
        $em->persist($benutzer);
        $em->flush();

        set_message('Benutzer wurde angelegt.');
        redirect('index.php?action=users');
    }

    $errors = $validator->getErrors();


    $view = 'create_seminar'; 

}

$view = 'create_user'; 