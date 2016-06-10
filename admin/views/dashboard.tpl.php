<h1>Dashboard</h1>
<?php 

//$details = new Details();

//$showusersystem =  $details->showUsersystem();
$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);

// echo json_encode($arr);
?>
<a href="index.php?action=users" class="userbox">
    <h5>Registrierte Benutzer</h5>
    <p><?php e($registrierte_benutzer[0][1]); ?></p>
</a>

<a class="userbox two">
    <h5>Angemeldete Teilnehmer</h5>
    <p><?php e($anzahl); ?></p>
</a>

<a href="index.php?action=category" class="userbox two">
    <h5>Anzahl der Kategorien</h5>
    <p><?php e($kategorien[0][1]); ?></p>
</a>

<a href="index.php?action=seminars" class="userbox two">
    <h5>Anzahl der Seminare</h5>
    <p><?php e($seminare[0][1]); ?></p>
</a>

<a href="index.php?action=seminars_dates" class="userbox two">
    <h5>Anzahl der Kurse</h5>
    <p><?php e($seminartermine[0][1]) ;?></p>
</a>

<table class="uebersicht">  
    <caption>laufende Seminartermine</caption>
    <tr>
        <th>Id</th>
        <th>Seminar</th>
        <th>Zeitraum</th>
        <th>Raum</th>
        <th>Teilnehmer</th>
        <th>Auslastung</th>
    </tr>
<?php foreach($seminarterminelist as $seminartermin): ?>
    <?php 
    if($seminartermin->getBeginn()->format('Y-m-d') < date("Y-m-d H:i:s") && $seminartermin->getEnde()->format('Y-m-d') > date("Y-m-d H:i:s")):
      
    ?>
    <tr>
        <td><?php e($seminartermin->getId()); ?></td>
        <td><?php e($seminartermin->getSeminar());  ?></td>
        <td><?php e($seminartermin->getBeginn()->format('d.m.Y').' - '.$seminartermin->getEnde()->format('d.m.Y')); ?></td>  
        <td><?php e($seminartermin->getRaum()); ?></td> 
        <td><?php $id = $seminartermin->getId();  echo teilnehmer_kurs($em, $id); ?></td>
        <td><?php $anzahl = teilnehmer_kurs($em, $id); echo percent_user_seminar($anzahl); ?></td>
    </tr>
    <?php
    
     endif;
    ?>
<?php endforeach;?>
</table>
   

<table class="uebersicht">    
    <caption>kommende Seminartermine</caption>
    <tr>
        <th>Id</th>
        <th>Seminar</th>
        <th>Zeitraum</th>
        <th>Raum</th>
        <th>Teilnehmer</th>
        <th>Auslastung</th>
    </tr>
<?php foreach($seminarterminelist as $seminartermin): ?>
    <?php 
    if($seminartermin->getBeginn()->format('Y-m-d') > date("Y-m-d")):
      
    ?>
    <tr>
        <td><?php e($seminartermin->getId()); ?></td>
        <td><?php e($seminartermin->getSeminar());  ?></td>
        <td><?php e($seminartermin->getBeginn()->format('d.m.Y').' - '.$seminartermin->getEnde()->format('d.m.Y')); ?></td>  
        <td><?php e($seminartermin->getRaum()); ?></td> 
        <td><?php $id = $seminartermin->getId();  echo teilnehmer_kurs($em, $id); ?></td>
        <td><?php $anzahl = teilnehmer_kurs($em, $id); echo percent_user_seminar($anzahl); ?></td>
    </tr>
    <?php
    
     endif;
    ?>
<?php endforeach;?>
</table>


<table class="uebersicht">    
    <caption>vergangene Seminartermine</caption>
    <tr>
        <th>Id</th>
        <th>Seminar</th>
        <th>Zeitraum</th>
        <th>Raum</th>
        <th>Teilnehmer</th>
        <th>Auslastung</th>
    </tr>
<?php foreach($seminarterminelist as $seminartermin): ?>
    <?php 
    if($seminartermin->getBeginn()->format('Y-m-d') < date("Y-m-d") && $seminartermin->getEnde()->format('Y-m-d') < date("Y-m-d H:i:s")):
      
    ?>
    <tr>
        <td><?php e($seminartermin->getId()); ?></td>
        <td><?php e($seminartermin->getSeminar());  ?></td>
        <td><?php e($seminartermin->getBeginn()->format('d.m.Y').' - '.$seminartermin->getEnde()->format('d.m.Y')); ?></td>  
        <td><?php e($seminartermin->getRaum()); ?></td> 
        <td><?php $id = $seminartermin->getId();  echo teilnehmer_kurs($em, $id); ?></td>
        <td><?php $anzahl = teilnehmer_kurs($em, $id); echo percent_user_seminar($anzahl); ?></td>
    </tr>
    <?php
    
     endif;
    ?>
<?php endforeach;?>
</table>