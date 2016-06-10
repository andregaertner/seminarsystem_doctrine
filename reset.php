<?php

require_once 'inc/config.inc.php';

use Models\Benutzer, Models\Kategorien, Models\Seminare, Models\Seminartermine;


$em->getConnection()->query('SET FOREIGN_KEY_CHECKS=0;');
$em->getConnection()->query('TRUNCATE TABLE benutzer;');
$em->getConnection()->query('TRUNCATE TABLE kategorien;');
$em->getConnection()->query('TRUNCATE TABLE seminare;');
$em->getConnection()->query('TRUNCATE TABLE seminartermine;');
$em->getConnection()->query('SET FOREIGN_KEY_CHECKS=1;');

// todo datum wird nicht eingetragen bzw das aktuelle nur
$entries = array(
    array(
        'anrede'          => 'Herr',
        'vorname'         => 'Frank',
        'nachname'        => 'Reich',
        'email'           => 'f.reich@example.com',
        'passwort'        => 'kochtopf',
        'registriert_set' => new \DateTime('2008-04-12'),
        'admin'    => 0
        ),	 	 	
    array(
        'anrede'          => 'Frau',
        'vorname'         => 'Marie',
        'nachname'        => 'Huana',
        'email'           => 'huana@example.com',
        'passwort'        => 'reibekuche',
        'registriert_set' => new \DateTime('2009-02-03'),
        'admin'           => 0
        ),
    array(
        'anrede'          => 'Herr',
        'vorname'         => 'Andreas',
        'nachname'        => 'Meisenbär',
        'email'           => 'a.meisenbär@example.com',
        'passwort'        => 'schüssel',
        'registriert_set' => new \DateTime('2008-07-15'),
        'admin'           => 0
        ), 		
    array(
        'anrede'          => 'Herr',
        'vorname'         => 'Klaus',
        'nachname'        => 'Uhr',
        'email'           => 'klaus@ur.org',
        'passwort'        => 'bratpfanne',
        'registriert_set' => new \DateTime('2008-02-05'),
        'admin'           => 0
        ),	
    array(
        'anrede'          => 'Herr',
        'vorname'         => 'Mike',
        'nachname'        => 'Rosoft',
        'email'           => 'sichtbar_grundlegend@kleinweich.com',
        'passwort'        => 'teekessel',
        'registriert_set' => new \DateTime('2009-11-11'),
        'admin'           => 0
        ),	 	 	
    array(
        'anrede'          => 'Dr',
        'vorname'         => 'Beatrice',
        'nachname'        => 'Lödmann',
        'email'           => 'beatrice@fraudoktor.de',
        'passwort'        => 'kaffeemuehle',
        'registriert_set' => new \DateTime('2006-09-09'),
        'admin'           => 0
        ),
    array(
        'anrede'          => 'Herr',
        'vorname'         => 'Andre',
        'nachname'        => 'Gärtner',
        'email'           => 'andreg@gmail.com',
        'passwort'        => 'andre',
        'registriert_set' => new \DateTime('2016-03-15'),
        'admin'           => 1
        ),
    array(
        'anrede'          => 'Herr',
        'vorname'         => 'Paul',
        'nachname'        => 'Panzer',
        'email'           => 'panzer@example.com',
        'passwort'        => '111',
        'registriert_set' => new \DateTime('2016-03-22'),
        'admin'           => 0
        ),
    array(
        'anrede'          => 'Herr',
        'vorname'         => 'Wolfang',
        'nachname'        => 'Schäuble',
        'email'           => 'schaueble@example.com',
        'passwort'        => 'ws',
        'registriert_set' => new \DateTime('2016-03-22'),
        'admin'           => 0
        ),
    array(
        'anrede'          => 'Frau',
        'vorname'         => 'Anna',
        'nachname'        => 'Kranich',
        'email'           => 'kranich@example.com',
        'passwort'        => '1234',
        'registriert_set' => new \DateTime('2016-03-22'),
        'admin'           => 0
        ),
    array(
        'anrede'          => 'Frau',
        'vorname'         => 'Marie',
        'nachname'        => 'Blanko',
        'email'           => 'blanko@example.com',
        'passwort'        => '1234',
        'registriert_set' => new \DateTime('2016-03-23'),
        'admin'           => 0
        ),
    array(
        'anrede'          => 'Dr',
        'vorname'         => 'Herbert',
        'nachname'        => 'wagner',
        'email'           => 'wagner@example.com',
        'passwort'        => '12345',
        'registriert_set' => new \DateTime('2016-03-23'),
        'admin'           => 0
        ),
    array(
        'anrede'          => 'Frau',
        'vorname'         => 'Angelika',
        'nachname'        => 'Merkel',
        'email'           => 'merkel@example.com',
        'passwort'        => '12345',
        'registriert_set' => new \DateTime('2016-03-23'),
        'admin'           => 0
        ),
    array(
        'anrede'          => 'Dr',
        'vorname'         => 'Ralf',
        'nachname'        => 'Merter',
        'email'           => 'merter@example.com',
        'passwort'        => '12345',
        'registriert_set' => new \DateTime('2016-03-23'),
        'admin'           => 0
        ),
    array(
        'anrede'          => 'Frau',
        'vorname'         => 'Sarah',
        'nachname'        => 'Pech',
        'email'           => 'pech@example.com',
        'passwort'        => '12345',
        'registriert_set' => new \DateTime('2016-03-23'),
        'admin'           => 0
        ),
    array(
        'anrede'          => 'Dr',
        'vorname'         => 'Tobias',
        'nachname'        => 'Bastelei',
        'email'           => 'bastelei@example.com',
        'passwort'        => '12345',
        'registriert_set' => new \DateTime('2016-03-23'),
        'admin'           => 0
        ),
);


foreach ($entries as $entry) {
  $benutzer = new Benutzer($entry);
  $em->persist($benutzer);
}

$entries = array(
    array(
        'name' => 'Datenbanken'
    ),
    array(
        'name' => 'Programmierung'
    ),
    array(
        'name' => 'Webdesign'
    ),
    array(
        'name' => '3D'
    ),
    array(
        'name' => 'C++'
    ),
    array(
        'name' => 'CM-Systeme'
    ),
    array(
        'name' => 'Apps'
    ),
    array(
        'name' => 'Gamedesign'
    ),
);

foreach ($entries as $entry) {
  $kategorien = new Kategorien($entry);
  $em->persist($kategorien);
}

$entries = array(
	array(
		'titel'        => 'Relationale Datenbanken & MySQL',
		'beschreibung' => 'Nahezu alle modernen W...',
		'preis'        => '975.00',
		'kategorie'    => 'Datenbanken'
	),
	array(
		'titel'        => 'Ruby on Rails',
		'beschreibung' => 'Ruby on Rails ist das neue, sensation...',
		'preis'        => '2500.00',
		'kategorie'    => 'Programmierung'
	),
	array(
		'titel'        => 'Ajax & DOM-Scripting',
		'beschreibung' => 'Ajax ist längst dem Hype-Stadium ... JavaScript is...',
		'preis'        => '1699.99',
		'kategorie'    => 'Programmierung'
	),
	array(
		'titel'        => 'Moderne JavaScript-Programmierung',
		'beschreibung' => '...gilt als DIE Programmiersprache für clientseiti...',
		'preis'        => '2500.00',
		'kategorie'    => 'Programmierung'
	),
	array(
		'titel'        => 'Adobe Flash Professional (Grundlagen)',
		'beschreibung' => 'Adobe Flash bringt voll animierte, multimediale, i...',
		'preis'        => '1500.00',
		'kategorie'    => 'Webdesign'
	),
	array(
		'titel'        => 'Adobe Flash Professional (ActionScript)',
		'beschreibung' => 'Für anspruchsvolle Flash-Präsentationen und intera...',
		'preis'        => '1500.00',
		'kategorie'    => 'Programmierung'
	),
	array(
		'titel'        => 'Digitale Bildbearbeitung mit Adobe Photoshop',
		'beschreibung' => 'In diesem Seminar lernen Sie die Grundlagen der di...',
		'preis'        => '1500.00',
		'kategorie'    => 'Webdesign'
	),
);

foreach ($entries as $entry) {
  $seminare = new Seminare($entry);
  $em->persist($seminare);
}

$em->flush();

// todo contrain seminar_id wird nicht eingefügt 
$entries = array(
	array(
		'beginn'     => new \DateTime('2016-06-20'),
		'ende'       => new \DateTime('2016-06-25'),
		'raum'       => 'Schulungsraum 1',
		'seminar_id' => 1,
	),
	array(
		'beginn'     => new \DateTime('2016-06-21'),
		'ende'       => new \DateTime('2016-06-27'),
		'raum'       => 'Schulungsraum 2',
		'seminar_id' => 1,
	),
	array(
		'beginn'     => new \DateTime('2016-06-23'),
		'ende'       => new \DateTime('2016-06-25'),
		'raum'       => 'Schulungsraum 1',
		'seminar_id' => 1,
	),
	array(
		'beginn'     => new \DateTime('2016-06-10'),
		'ende'       => new \DateTime('2016-06-25'),
		'raum'       => 'Besprechungsraum',
		'seminar_id' => 1,
	),
	array(
		'beginn'     => new \DateTime('2016-01-17'),
		'ende'       => new \DateTime('2016-01-25'),
		'raum'       => 'Schulungsraum 1',
		'seminar_id' => 4,
	),
	array(
		'beginn'     => new \DateTime('2016-10-17'),
		'ende'       => new \DateTime('2016-10-24'),
		'raum'       => 'Schulungsraum 2',
		'seminar_id' => 4,
	),
	array(
		'beginn'     => new \DateTime('2016-03-17'),
		'ende'       => new \DateTime('2016-03-30'),
		'raum'       => 'Schulungsraum 3',
		'seminar_id' => 1,
	),
	array(
		'beginn'     => new \DateTime('2016-06-21'),
		'ende'       => new \DateTime('2016-06-24'),
		'raum'       => 'Schulungsraum 5',
		'seminar_id' => 3,
	),
);

foreach ($entries as $entry) {
    
  // hole die Seminar ID  
  $seminar = $em->getRepository('Models\Seminare')->find($entry['seminar_id']);  
  
  // Instanz der Seminartermine Tabelle da sie dort eingefügt wird 
  $seminartermin = new Seminartermine($entry);
  
  // Füge in die Tabelle den Contrain des Seminars ein
  $seminar->addSeminartermin($seminartermin);
  
  // jetzt einfügen 
  $seminartermin->setSeminar($seminar);
  
  // sql string übergeben
  $em->persist($seminartermin);
  
  
}


$em->flush();


$entries = array(
	array(
            'user_id'     => 1,
            'seminar_id'  => 3,
	),
        array(
            'user_id'     => 2,
            'seminar_id'  => 3,
	),
        array(
            'user_id'     => 3,
            'seminar_id'  => 3,
	),
        array(
            'user_id'     => 4,
            'seminar_id'  => 3,
	),
        array(
            'user_id'     => 5,
            'seminar_id'  => 3,
	),
        array(
            'user_id'     => 6,
            'seminar_id'  => 3,
	),
        array(
            'user_id'     => 7,
            'seminar_id'  => 3,
	),
        array(
            'user_id'     => 8,
            'seminar_id'  => 3,
	),
        array(
            'user_id'     => 9,
            'seminar_id'  => 3,
	),
        array(
            'user_id'     => 10,
            'seminar_id'  => 3,
	),
        array(
            'user_id'     => 11,
            'seminar_id'  => 3,
	),
        array(
            'user_id'     => 12,
            'seminar_id'  => 3,
	),
        array(
            'user_id'     => 13,
            'seminar_id'  => 3,
	),
        array(
            'user_id'     => 14,
            'seminar_id'  => 3,
	),
        array(
            'user_id'     => 15,
            'seminar_id'  => 3,
	),
        array(
            'user_id'     => 1,
            'seminar_id'  => 1,
	),
        array(
            'user_id'     => 1,
            'seminar_id'  => 2,
	),
);

foreach ($entries as $entry) {
  // hole die Seminar ID  
  $user = $em->getRepository('Models\Benutzer')->find($entry['user_id']);  
  
  // hole die Benutzer ID  
  $seminartermine = $em->getRepository('Models\Seminartermine')->find($entry['seminar_id']);  
  
  $user->addSeminartermin($seminartermine);
  $seminartermine->addUser($user);
  //var_dump($seminartermine->getUsers());
  
  
}
$em->flush();



?>
Die Datenbankinhalte wurden angepasst.