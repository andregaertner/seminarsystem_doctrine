<h1>Seminartermin löschen</h1>
<p>
  Wollen Sie den Termin über "<?php echo $seminardate->getSeminar(); ?>" am
  &quot;<?php echo $seminardate->getBeginn()->format('d.m.Y').' - '.$seminardate->getEnde()->format('d.m.Y'); ?>&quot;
  wirklich entfernen?
</p>


<form action="index.php?action=delete_seminar_date" method="post">

  <input name="id" type="hidden" value="<?php echo $seminardate->getId(); ?>" />

  <input type="submit" class="button" value="Ja" />
  <a id="delete" href="index.php?action=seminars_dates">Abbrechen</a>
</form>