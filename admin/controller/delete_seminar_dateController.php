<?php
use Webmasters\Doctrine\ORM\Util\ArrayMapper;
use Models\Benutzer, Models\Kategorien, Models\Seminare, Models\Seminartermine;

$seminardate = $em
    ->getRepository('Models\Seminartermine')
    ->find($_REQUEST['id'])
    ;

// Eintrag löschen
if ($_POST) 
{
    $em->remove($seminardate);
    $em->flush();
    $view = 'delete_seminardate'; 
    set_message('Seminartermin wurde entfernt.');
    redirect('index.php?action=seminars_dates');
}
$seminardate || error404();