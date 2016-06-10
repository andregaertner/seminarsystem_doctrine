<?php
$seminare = $em->getRepository('Models\Seminare')->findAll();
$view = 'seminars'; 