<?php
use Webmasters\Doctrine\ORM\Util\ArrayMapper;
use Models\Benutzer, Models\Kategorien, Models\Seminare, Models\Seminartermine;

$user = $em
    ->getRepository('Models\Benutzer')
    ->find($_REQUEST['id'])
    ;

// Eintrag löschen
if ($_POST) 
{
    $em->remove($user);
    $em->flush();
    $view = 'delete_user'; 
    set_message('Benutzer wurde entfernt.');
    redirect('index.php?action=users');
}
$user || error404();