<?php
use Webmasters\Doctrine\ORM\Util\ArrayMapper;
use Models\Benutzer, Models\Kategorien, Models\Seminare, Models\Seminartermine;

$kategorien = $em->getRepository('Models\Kategorien')->findAll();
$view = 'category';