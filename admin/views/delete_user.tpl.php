<h1>Benutzer löschen</h1>
<p>
  Wollen Sie den Benutzer
  &quot;<?php echo $user->getVorname().' '.$user->getNachname(); ?>&quot;
  wirklich entfernen?
</p>


<form action="<?php echo "index.php?action=".$action; ?>" method="post">

  <input name="id" type="hidden" value="<?php echo $user->getId(); ?>" />

  <input type="submit" class="button" value="Ja" />
  <a id="delete" href="index.php?action=users">Abbrechen</a>
</form>