<?php 
require_once 'inc/config.inc.php';
require_once '../inc/helper.inc.php';
require_once '../inc/functions.inc.php';

use Webmasters\Doctrine\ORM\Util\ArrayMapper;
use Models\Benutzer, Models\Kategorien, Models\Seminare, Models\Seminartermine;

//Session starten
session_start();

/* ROUTING */
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : null;
// erlaubte Zeichen
$action = preg_replace('/[^a-z_]/', '', $action);

if(isset($_POST['id']))
{
    $id=$_POST['id'];
    
}
else{
    $id=0; 
}

$view = $action;




switch($action) 
{
    
    // Login Logout
    case 'login':
        if ($_POST) 
        {
          $user = $em
              ->getRepository('Models\Benutzer')
              ->findOneByEmail($_POST['email'])
          ;

          if ($user && ($user->getPasswort() == $_POST['password'])) {
            log_in($user->getId());
            set_message('User wurde eingeloggt.');
            redirect('index.php');
          }
          $errors = array('Fehlerhafte Logindaten!');
        }
        break;
    case 'logout':
        log_out();
        set_message('User wurde ausgeloggt.');
        redirect('index.php');
        break;
    case 'logout':
        $view = 'logout';  
        break;
    
    // Dashboard
    case 'dashboard':
        require_once 'controller/dashboardController.php';
        break;
    // Einstellungen
    case 'preference':
        $view = 'preference';  
        break;
    
    
    // Katgorien
    case 'category':
        require_once 'controller/categoryController.php';
        break;
    case 'create_category':
        require_once 'controller/create_categoryController.php';
        break;
    case 'edit_category':
        require_once 'controller/edit_categoryController.php';
        break;
    case 'delete_category':
        require_once 'controller/delete_categoryController.php';
        break;
    
    
    // Seminare
    case 'seminars':
        require_once 'controller/seminarsController.php';
        break;
    case 'create_seminar':
        require_once 'controller/create_seminarController.php';
        break;
    case 'edit_seminar':
        require_once 'controller/edit_seminarController.php';
        break; 
    case 'delete_seminar':
        require_once 'controller/delete_seminarController.php';
        break; 
    
    
    // Seminartermine
    case 'seminars_dates':
        require_once 'controller/seminars_datesController.php';
        break;
    case 'create_seminar_date':
        require_once 'controller/create_seminar_dateController.php';
        break;
    case 'edit_seminartermin':
        require_once 'controller/edit_seminarterminController.php';
        break; 
    case 'delete_seminar_date':
        require_once 'controller/delete_seminar_dateController.php';
        break;     
    
    
    // Benutzer
    case 'users':
        require_once 'controller/usersController.php';
        break;
    case 'create_user':
        require_once 'controller/create_userController.php';
        break;
    case 'edit_user':
        require_once 'controller/edit_userController.php';
        break; 
    case 'delete_user':
        require_once 'controller/delete_userController.php';
        break;
    
    default:
        require_once 'controller/dashboardController.php';
        break;
}

// Meldung auslesen (sofern vorhanden)
$message = get_message();

require_once 'views/layout.tpl.php';
?>