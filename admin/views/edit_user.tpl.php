<h1>Bearbeite Benutzer</h1>
<form action="index.php?action=<?php echo $action; ?>" method="post">

<input name="id" type="hidden" value="<?php e($benutzer->getId()); ?>" /> 

<label for="anrede">Anrede*</label>
<input name="anrede" value="<?php e($benutzer->getAnrede()); ?>" />

<label for="vorname">Vorname*</label>
<input name="vorname" value="<?php e($benutzer->getVorname()); ?>" />

<label for="nachname">Nachname*</label>
<input name="nachname" value="<?php e($benutzer->getNachname()); ?>" />

<label for="email">Email*</label>
<input name="email" value="<?php e($benutzer->getEmail()); ?>" />

<label for="passwort">Passwort*</label>
<input name="passwort" value="<?php e($benutzer->getPasswort()); ?>" />

<label for="registriert_seit">Registriert seit*</label>
<input class="datepicker" name="registriert_seit" value="<?php e($benutzer->getRegistriert_seit()->format('d.m.Y')); ?>" />

<label for="admin">Admin</label>
<select name="admin">
    <option value="1">Ja</option>
    <option value="0">Nein</option>
</select>

<input type="submit" class="button" value="Abschicken" />
<a id="delete" href="index.php?action=users">Abbrechen</a>
</form>