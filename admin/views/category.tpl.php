<h1>Kategorie</h1>

<table>    
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th></th>
        <th></th>
    </tr>
<?php foreach($kategorien as $kategorie): ?>
    <tr>
        <td><?php e($kategorie->getId()); ?></td>
        <td><?php e($kategorie->getName()); ?></td>  
        <td class="edit"><a href="?action=edit_category&amp;id=<?php e($kategorie->getId()); ?>"><i class="material-icons md-light">edit</i></a></td>
        <td class="delete"><a href="?action=delete_category&amp;id=<?php e($kategorie->getId()); ?>"><i class="material-icons md-light">delete</i></a></td>
    </tr>
<?php endforeach;?>
</table>