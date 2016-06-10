<h1>Kategorie erstellen</h1>
<form name="category"  method="post" onsubmit="return validateForm()" action="index.php?action=create_category">
    <label for="kategorie">Kategoriename</label>
    <input id="kategorie" type="text" name="name" placeholder="Kategorie" value="<?php if($_POST){echo $_POST['name']; } ?>" >
    <input type="submit" value="senden">
    <a id="delete" href="index.php?action=category">Abbrechen</a>
</form>