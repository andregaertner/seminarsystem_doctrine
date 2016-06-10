<h1>Bearbeite Seminartermin</h1>
<form action="index.php?action=<?php echo $action; ?>" method="post">

<input name="id" type="hidden" value="<?php e($seminartermin->getId()); ?>" /> 

<label for="beginn">Beginn*</label>
<input class="datepicker" name="beginn" value="<?php e($seminartermin->getBeginn()->format('d.m.Y')); ?>" />

<label for="ende">Ende*</label>
<input class="datepicker" name="ende" value="<?php e($seminartermin->getEnde()->format('d.m.Y')); ?>" />

<label for="raum">Raum*</label>
<input name="raum" value="<?php e($seminartermin->getRaum()); ?>" />

<label for="seminar_id">Seminar*</label>
    
<select name="seminar_id" id="seminar">
    <?php foreach($seminare as $seminar): ?> 
        <option value="<?php e($seminar->getId()); ?>">
            <?php e($seminar->getTitel()); ?>
        </option>
    <?php endforeach; ?>
</select>

<input type="submit" class="button" value="Abschicken" />
<a id="delete" href="index.php?action=seminars_dates">Abbrechen</a>
</form>