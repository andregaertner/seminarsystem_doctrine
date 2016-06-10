<?php 
class CheckSeminartermin
{
    public function checkRegistration()
    {
        return '<a href="">buchen</a>';
        //todo
        
        // falls der Benutzer mit seiner id und der terminid eingetragen ist 
        // falls die ANzahl der Teilnhgemer 15 übersteigt 
        // falls sich ein Termin überschneidet 
    }        
}

$checkin = new CheckSeminartermin();

?>

<h1>Seminartermine</h1>
<table>    
    <tr>
        <th>Titel</th>
        <th>Zeitraum</th>
        <th>Raum</th>
        <th>&nbsp;</th>
    </tr>
<?php foreach($seminartermine as $seminartermin): ?>
    <tr>
        <td><?php e($seminartermin->getSeminar()); ?></td> 
        <td><?php e($seminartermin->getBeginn()->format('d.m.Y').' - '.$seminartermin->getEnde()->format('d.m.Y')); ?></td>
        <td><?php e($seminartermin->getRaum()); ?></td>  
        <td><?php e($seminartermin->getId()); echo $checkin->checkRegistration(); // todo ?></td> 
    </tr>
<?php endforeach;?>
</table>