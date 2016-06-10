<?php
use Webmasters\Doctrine\ORM\Util\ArrayMapper;
use Models\Benutzer, Models\Kategorien, Models\Seminare, Models\Seminartermine;

$kategorien = $em->getRepository('Models\Kategorien')->findAll('titel');

// Seminar speichern
if ($_POST) 
{
    $seminar = new Seminare();
    ArrayMapper::setEntity($seminar)->setData($_POST);


    $validator = $em->getValidator($seminar);
    if ($validator->isValid()) 
    {
        $em->persist($seminar);
        $em->flush();

        redirect('index.php?action=seminars');
    }

    $errors = $validator->getErrors();
}


$view = 'create_seminar'; 