<?php
use Webmasters\Doctrine\ORM\Util\ArrayMapper;
use Models\Benutzer, Models\Kategorien, Models\Seminare, Models\Seminartermine;

$seminar = $em
    ->getRepository('Models\Seminare')
    ->find($_REQUEST['id'])
    ;

// Eintrag löschen
if ($_POST) 
{
    $em->remove($seminar);
    $em->flush();
    $view = 'delete_seminar'; 
    set_message('Seminar wurde entfernt.');
    redirect('index.php?action=seminars');
}
$seminar || error404();
