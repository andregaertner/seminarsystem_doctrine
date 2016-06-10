<?php
use Webmasters\Doctrine\ORM\Util\ArrayMapper;
use Models\Benutzer, Models\Kategorien, Models\Seminare, Models\Seminartermine;

$seminartermine = $em->getRepository('Models\Seminartermine')->findAll();
$view = 'seminars_dates'; 