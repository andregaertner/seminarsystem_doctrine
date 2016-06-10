<h1>Seminartermine</h1>
    
<table>    
    <tr>
        <th>Id</th>
        <th>Seminar</th>
        <th>Zeitraum</th>
        <th>Raum</th>
        <th></th>
        <th></th>
    </tr>
<?php foreach($seminartermine as $seminartermin): ?>
    <tr>
        <td><?php e($seminartermin->getId()); ?></td>
        <td><?php e($seminartermin->getSeminar()); ?></td>
        <td><?php e($seminartermin->getBeginn()->format('d.m.Y').' - '.$seminartermin->getEnde()->format('d.m.Y'));?></td>
        <td><?php e($seminartermin->getRaum()); ?></td>  
        <td class="edit"><a href="?action=edit_seminartermin&amp;id=<?php e($seminartermin->getId()); ?>"><i class="material-icons md-light">edit</i></a></td>
        <td class="delete"><a href="?action=delete_seminar_date&amp;id=<?php e($seminartermin->getId()); ?>"><i class="material-icons md-light">delete</i></a></td>
    </tr>
<?php endforeach;?>
</table>