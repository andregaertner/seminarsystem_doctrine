<?php
use Webmasters\Doctrine\ORM\Util\ArrayMapper;
use Models\Benutzer, Models\Kategorien, Models\Seminare, Models\Seminartermine;

$users = $em->getRepository('Models\Benutzer')->findAll();
$view = 'users'; 
