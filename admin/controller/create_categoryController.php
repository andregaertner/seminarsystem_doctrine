<?php
use Webmasters\Doctrine\ORM\Util\ArrayMapper;
use Models\Benutzer, Models\Kategorien, Models\Seminare, Models\Seminartermine;

// create category
$kategorie = new Kategorien();

if ($_POST) 
{
    ArrayMapper::setEntity($kategorie)->setData($_POST);

    $categorys = $em
        ->getRepository('Models\Kategorien')
        ->findAll();
    ;  

    $validator = $em->getValidator($kategorie, $categorys);
    if ($validator->isValid()) {
        $em->persist($kategorie);
        $em->flush();

        set_message('Kategorie wurde angelegt.');
        redirect('index.php?action=category');
    }

    $errors = $validator->getErrors();
}
$view = 'create_category';