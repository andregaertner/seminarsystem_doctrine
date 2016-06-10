<?php
use Webmasters\Doctrine\ORM\Util\ArrayMapper;
use Models\Benutzer, Models\Kategorien, Models\Seminare, Models\Seminartermine;

// Daten holen
$kategorien = $em
    ->getRepository('Models\Kategorien')
    ->find($_REQUEST['id'])
;    

// Daten eintragen
if($_POST)
{
    ArrayMapper::setEntity($kategorien)->setData($_POST);
    
    
    $categorys = $em
        ->getRepository('Models\Kategorien')
        ->findAll();
    ;  

    $validator = $em->getValidator($kategorien, $categorys);
    if ($validator->isValid()) {
        $em->persist($kategorien);
        $em->flush();

        set_message('Kategorie wurde aktualisiert.');
        redirect('index.php?action=category');
    }

    $errors = $validator->getErrors();
    
    
    
    
    
    
    

    
}

$view = 'edit_category';
$kategorien || error404();