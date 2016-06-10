<h1>Seminare</h1>
<table>    
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Beschreibung</th>
        <th>Preis</th>
        <th>Kategorie</th>
        <th></th>
        <th></th>
    </tr>
<?php foreach($seminare as $seminar): ?>
    <tr>
        <td><?php e($seminar->getId()); ?></td>
        <td><?php e($seminar->getTitel()); ?></td>  
        <td><?php e($seminar->getBeschreibung()); ?></td>  
        <td><?php e($seminar->getPreis()); ?></td>  
        <td><?php e($seminar->getKategorie()); ?></td>  
        <td class="edit"><a href="?action=edit_seminar&amp;id=<?php e($seminar->getId()); ?>"><i class="material-icons md-light">edit</i></a></td>
        <td class="delete"><a href="?action=delete_seminar&amp;id=<?php e($seminar->getId()); ?>"><i class="material-icons md-light">delete</i></a></td>
    </tr>
<?php endforeach;?>
</table>