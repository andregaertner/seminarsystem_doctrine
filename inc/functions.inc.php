<?php
/**
 * @description leitet den Besucher auf die aktuelle Rout
 * @method redirect
 * @param string $to
 */
function redirect($to)
{
	header('Location:' . $to);
	exit;
}

/**
 * @description Wenn eine Route nicht gefunden wird wird eine entsprechende Fehlermeldung 404 File not Found Text zurückgegeben
 * @method error404
 */
function error404()
{
  header('HTTP/1.0 404 Not Found');
  die('Error 404: Die angeforderte Seite wurde nicht gefunden.');
}

/**
 * @description speichtert die Nachrichten in einer Session
 * @method set_message
 * @param string $message
 */
function set_message($message)
{
	$_SESSION['message'] = $message;
}

/**
 * @description gibt die Nachricht aus
 * @method get_message
 */
function get_message()
{
	$message = false;
	if(isset($_SESSION['message']))
	{
		$message = $_SESSION['message'];
		unset($_SESSION['message']);
	}	
	return $message;
}

/**
 * @description speichtert die id des Users in einer Session
 * @method log_in
 * @param integer id
 */
function log_in($id)
{
  $_SESSION['user_id'] = $id;
}

/**
 * @description gibt true zurück wenn Session user_id existiert und nicht leer ist
 * @method is_logged_in
 */
function is_logged_in()
{
  return (isset($_SESSION['user_id']) && !empty($_SESSION['user_id']));
}

/**
 * @description löscht die Session user_id und leitet auf die Startseite um
 * @method log_out
 */
function log_out()
{
  unset($_SESSION['user_id']);
  redirect('index.php?action=login');
}

/**
 * @description genieriert aus dem übergebenen Passwort ein hash nach encrypt und speichert ihn in $hash 
 * prüft in der if beim aufruf der Methode ob true zurückgegeben wird in dme  die Methode password_verify 
 * aufgerufen wird  und der übergebene  hash und das passwort übereinstimmen und true zurückliefert
 * @method password_verify
 * @param string $password
 */
/*
function password_verify($password)
{
    $options = array(
    'cost' =>15,
    'salt' => '1234567890123456789012'
    );

    $hash = password_hash($password, PASSWORD_DEFAULT, $options);
    
    if(password_verify($password, $hash))
    {
        // http://php.net/manual/de/function.password-needs-rehash.php
        // seit php 5.5 password_needs_rehash — Überprüft, ob der übergebene Hash mit den übergebenen Optionen übereinstimmt
        // Diese Funktion überprüft, ob der übergebene Hash den gleichen Algorithmus und die gleichen Optionen nutzt, wie in den übergebenen Optionen abgegeben. Falls nicht, wird angenommen, dass erneutes Hashen notwendig ist.
        // Kostenfaktor wurde von 12 auf 15 erhoeht
        if(password_needs_rehash($hash, PASSWORD_DEFAULT, $options))
        {
            // Neuen Hash mit den aktuellen Kostenfaktor ermitteln
            $hash = password_hash($password, PASSWORD_DEFAULT, $options);
            
            // Hier fehlt die Aktualisierung des Hashwertes in der DB 
        }
    }
}
*/


function teilnehmer_kurs($em, $kursid)
{
    // Anzahl aller Benutzer
    $seminare = $em->getRepository('Models\Benutzer')->findAll();
   // var_dump($seminare);
    $anzahl = 0; 
    //var_dump($seminare);
    $anzahl = 0; 
        foreach($seminare as $seminar)
        {
            $seminartermine = $seminar->getSeminartermine();
           //var_dump($user);
            foreach($seminartermine as $key=>$entry)
            {
                if($kursid === $seminartermine[$key]->getId())
                {    
                $anzahl++;
                }
            }    
        }
    return $anzahl;
}

function percent_user_seminar($anzahl)
{
    $max = 15;
    $onepercent = $max / 100;
    
    if($anzahl == 0)
       {
           $percent = '0 %';
       }
       else if($anzahl == 15)
       {
           $percent = '100 %';
       }    
           
       else
       {
            $percent = round(100/15*$anzahl,0);
            $percent .= ' %';
       }    
    
    return $percent;
}
?>