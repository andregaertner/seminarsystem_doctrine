<?php
use Webmasters\Doctrine\ORM\Util\ArrayMapper;
use Models\Benutzer, Models\Kategorien, Models\Seminare, Models\Seminartermine;

$kategorien = $em
    ->getRepository('Models\Kategorien')
    ->find($_REQUEST['id'])
    ;

// Eintrag löschen
if ($_POST) 
{
    $em->remove($kategorien);
    $em->flush();
    $view = 'delete_category'; 
    set_message('Kategorie wurde entfernt.');
    redirect('index.php?action=category');
}
$kategorien || error404();