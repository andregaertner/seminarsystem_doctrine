<h1>Seminar löschen</h1>
<p>
  Wollen Sie das Seminar
  &quot;<?php echo $seminar->getTitel(); ?>&quot;
  wirklich entfernen?
</p>


<form action="index.php?action=delete_seminar" method="post">

  <input name="id" type="hidden" value="<?php echo $seminar->getId(); ?>" />

  <input type="submit" class="button" value="Ja" />
  <a id="delete" href="index.php?action=seminars">Abbrechen</a>
</form>