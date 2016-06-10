<?php


$oauth = new Oauth();

$password = $_REQUEST['password'];
$oauth->checkLogin($em, $password);
