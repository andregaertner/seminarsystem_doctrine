<?php

require_once 'inc/functions.inc.php';
require_once 'inc/helper.inc.php';

require_once 'inc/config.inc.php';
require_once 'inc/oauth.php';


use Webmaster\Doctrine\ORM\Util\ArrayMapper;
use Models\Benutzer, Models\Kategorien, Models\Seminare, Models\Seminartermine;

//Session starten
session_start();

//r equire_once 'includes/emulator.inc.php';

/*
$benutzer = new Benutzer();
$kategorien = new Kategorien();
$seminare = new Seminare();
$seminartermine = new Seminartermine();
*/





// my classes
require_once('includes/headform.php');


#index_version_4.php?action=zeige_buch&id=0
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : null;
if(isset($_POST['id'])){$id=$_POST['id'];}else{$id=0; }
$view = $action;

switch($action) 
{
    case 'startseite':
        $view = 'startseite';  
        break;
    case 'seminare':
        $seminare = $em->getRepository('Models\Seminare')->findAll();
        $view = 'seminare';
        break;
    case 'seminaretermine':
        //$seminartermine = $em->getRepository('Models\Seminartermine')->findAll();
        
        // Join Abfrage DQL
        
        $query = $em
            ->createQueryBuilder()
            ->select('st')
            ->from('Models\Seminartermine', 'st')
            ->where('st.beginn > CURRENT_DATE()')
            ->orderBy('st.beginn', 'ASC')
            ->leftJoin('st.seminar', 's')
            ->getQuery()
        ;
		
        $seminartermine = $query->getResult();
         
        /*$query = $em->createQuery("SELECT s FROM Models\Seminartermine s LEFT JOIN s.seminar si ");*/
        //$seminartermine = $query->getResult();
        
        $view = 'seminaretermine';  
        break;
    case 'dozenten':
        $view = 'dozenten';  
        break;
    case 'kontakt':
        $view = 'kontakt';  
        break;
    case 'impressum':
        $view = 'impressum';  
        break;
    case 'login':
        $view = 'login';
        break;
    case 'logout';
        $view = 'logout';
        break;
    default:
        $view = 'startseite';
      break;
}

require_once 'views/layout.tpl.php';

?>