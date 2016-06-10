<h1>Bearbeite Seminar</h1>
<form action="index.php?action=<?php echo $action; ?>" method="post">

<input name="id" type="hidden" value="<?php e($seminar->getId()); ?>" /> 

<label for="titel">Titel*</label>
<input name="titel" value="<?php e($seminar->getTitel()); ?>" />

<label for="beschreibung">Beschreibung*</label>
<input name="beschreibung" value="<?php e($seminar->getBeschreibung()); ?>" />

<label for="preis">Preis*</label>
<input name="preis" value="<?php e($seminar->getPreis()); ?>" />

<label for="kategorie">Kategorie*</label>

<select name="kategorie" id="seminar">
    
    
    <?php foreach($kategorien as $kategorie): ?> 
        
        <?php if( $seminar->getKategorie() == $kategorie->getName()):?>
        
            <option selected value="<?php e($kategorie->getName()); ?>"> <?php // todo <?php echo $kategorie->getId(); ?contrain> ?>
                <?php e($kategorie->getName()); ?>
            </option>
        <?php else:?>
            <option value="<?php e($kategorie->getName()); ?>"> <?php // todo <?php echo $kategorie->getId(); ?contrain> ?>
                <?php e($kategorie->getName()); ?>
            </option>
        <?php endif; ?>
        
        
    <?php endforeach; ?>
</select>    

<input type="submit" class="button" value="Abschicken" />
<a id="delete" href="index.php?action=seminars">Abbrechen</a>
</form>