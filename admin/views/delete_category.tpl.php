<h1>Kategorie löschen</h1>
<p>
  Wollen Sie die Kategorie
  &quot;<?php echo $kategorien->getName(); ?>&quot;
  wirklich entfernen?
</p>


<form action="index.php?action=delete_category" method="post">

  <input name="id" type="hidden" value="<?php echo $kategorien->getId(); ?>" />

  <input type="submit" class="button" value="Ja" />
  <a id="delete" href="index.php?action=category">Abbrechen</a>
</form>