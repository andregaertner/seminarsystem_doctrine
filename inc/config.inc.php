<?php

// Konfiguration der Datenbankverbindung
$connectionOptions = array(
  'default' => array(
    'driver'   => 'pdo_mysql',
    'dbname'   => 'seminarverwaltung31',
    'host'     => 'localhost',
    'user'     => 'root',
    'password' => 'root'
  ),
);

// Konfiguration der Anwendung
$applicationOptions = array(
	'debug_mode' => true,
);

// Einbindung des Autoloaders
require_once 'vendor/autoload.php';

$bootstrap = Webmasters\Doctrine\Bootstrap::getInstance($connectionOptions,$applicationOptions);

// Ueber dieses Objekt werden alle Datenbank-Operationen abgewickelt
$em = $bootstrap->getEm();



?>