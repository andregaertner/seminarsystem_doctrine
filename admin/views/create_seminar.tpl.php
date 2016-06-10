<h1>Seminar erstellen</h1>

<form method="post" action="index.php?action=create_seminar">
    <label for="titel">Titel*</label>
    <input id="titel" type="text" name="titel" placeholder="Titel" value="<?php if($_POST){echo $_POST['titel']; } ?>" required />  

    <label for="beschreibung">Beschreibung*</label>
    <input  id="beschreibung" type="text" name="beschreibung" placeholder="Beschreibung" value="<?php if($_POST){echo $_POST['beschreibung']; } ?>" required />

    <label for="preis">Preis*</label>
    <input id="preis" type="text" name="preis" placeholder="Preis" value="<?php if($_POST){echo $_POST['preis']; } ?>" required />

    <label for="kategorie">Kategorie*</label>
 
    <select name="kategorie" id="seminar">
        <option value="">Bitte wählen</option>
        <?php foreach($kategorien as $kategorie): ?> 
            <option <?php if(isset($_POST['kategorie']) && $_POST['kategorie'] == $kategorie->getName()){ echo 'selected';} ?> value="<?php echo $kategorie->getName(); ?>"><?php // echo $kategorie->getId(); ?>
                <?php echo $kategorie->getName(); ?>
            </option>
        <?php endforeach; ?>
    </select>
    
    <input id="submit" type="submit" name="newseminar" value="senden">
    <a id="delete" href="index.php?action=seminars">Abbrechen</a>
</form>