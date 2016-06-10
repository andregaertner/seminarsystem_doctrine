<h1>Benutzer</h1>
<?php
/*
$password = 'test';

$options = array(
    'cost' =>12,
    'salt' => '1234567890123456789012'
);

$hash = password_hash($password, PASSWORD_DEFAULT, $options);

$info = password_get_info($hash);
var_dump($hash, $info);

die();
 * 
 */
?>
<table>    
    <tr>
        <th>Id</th>
        <th>Anrede</th>
        <th>Vorname</th>
        <th>Nachname</th>
        <th>Email</th>
        <th>Passwort</th>
        <th>Registriert seit</th>
        <th>Admin</th>
        <th></th>
        <th></th>
    </tr>
<?php foreach($users as $user): ?>
    <tr>
        <td><?php e($user->getId()); ?></td>
        <td><?php e($user->getAnrede()); ?></td>  
        <td><?php e($user->getVorname()); ?></td>  
        <td><?php e($user->getNachname()); ?></td>
        <td><?php e($user->getEmail()); ?></td> 
        <td><?php e($user->getPasswort()); ?></td> 
        <td><?php e($user->getRegistriert_seit()->format('d.m.Y')); ?></td> 
        <td><?php e($user->getAdmin()); ?></td> 
        <td class="edit"><a href="?action=edit_user&amp;id=<?php e($user->getId()); ?>"><i class="material-icons md-light">edit</i></a></td>
        <td class="delete"><a href="?action=delete_user&amp;id=<?php e($user->getId()); ?>"><i class="material-icons md-light">delete</i></a></td>
    </tr>
<?php endforeach;?>
</table>