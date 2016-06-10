<?php
use Webmasters\Doctrine\ORM\Util\ArrayMapper;
use Models\Benutzer, Models\Kategorien, Models\Seminare, Models\Seminartermine;

if(!isset($_SESSION['user_id']))
{    
    redirect('index.php?action=login');
};

// Anzahl der registrierten Benutzer
$query = $em->createQuery('SELECT COUNT(u.id) FROM Models\Benutzer u');
$registrierte_benutzer = $query->getResult();

// Anzahl aller Benutzer in allen Seminarterminen
$seminare = $em->getRepository('Models\Seminartermine')->findAll();

// Anzahl der Benutzer die im Seminar teilnehemen
$anzahl = 0; 
foreach($seminare as $seminar)
{
    $user = $seminar->getUsers();

    foreach($user as $entry)
    {
        $anzahl++;
    }    
}

//$query = $em->createQuery('SELECT COUNT(u.benutzerid) FROM Models\nimmt_teil u');
$teilnehmer = $query->getResult();

// Anzahl der Kategorien
$query = $em->createQuery('SELECT COUNT(u.id) FROM Models\Kategorien u');
$kategorien = $query->getResult();

// Anzahl der Seminare
$query = $em->createQuery('SELECT COUNT(u.id) FROM Models\Seminare u');
$seminare = $query->getResult();

// Anzahl der Seminartermine
$query = $em->createQuery('SELECT COUNT(u.id) FROM Models\Seminartermine u');
$seminartermine = $query->getResult();

// Liste der Seminartermine
$seminarterminelist = $em->getRepository('Models\Seminartermine')->findAll();

$view = 'dashboard';