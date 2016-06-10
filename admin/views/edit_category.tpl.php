<h1>Bearbeite Kategorie</h1>
<form name="category" onsubmit="return validateForm()" action="index.php?action=<?php echo $action; ?>" method="post">

<input name="id" type="hidden" value="<?php e($kategorien->getId()); ?>" /> 
<label for="news">Name*</label>
<input name="name" value="<?php e($kategorien->getName()); ?>" required />

<input type="submit" class="button" value="Abschicken" />
<a id="delete" href="index.php?action=category">Abbrechen</a>
</form>