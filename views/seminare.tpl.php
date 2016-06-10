<h1>Seminare</h1>
<table>

<?php // var_dump($seminare); ?>
    
<table>    
    <tr>
        <th>Titel</th>
        <th>Beschreibung</th>
        <th>Preis</th>
        <th>Kategorie</th>
    </tr>
<?php foreach($seminare as $seminar): ?>
    <tr>
        <td><?php e($seminar->getTitel()); ?></td>
        <td><?php e($seminar->getBeschreibung()); ?></td>  
        <td><?php e($seminar->getPreis()); ?> €</td>  
        <td><?php e($seminar->getKategorie()); ?></td>  
    </tr>
<?php endforeach;?>
</table>
    