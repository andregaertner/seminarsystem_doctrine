<h1>Benutzer erstellen</h1>
<form method="post" action="index.php?action=create_user">
    <label for="Anrede">Anrede*</label>
    
    <select name="anrede">
        <option value="">Bitte wählen</option>
        <?php
        $anrede = array('Herr', 'Frau', 'Dr');
        foreach($anrede as $val):
        ?>    
        <option <?php if(isset($_POST['anrede']) && $_POST['anrede'] == $val){ echo 'selected';} ?> value="<?php e($val); ?>">
            <?php e($val); ?>
        </option>
        <?php endforeach; ?>
    </select>
    <label for="vorname">Vorname*</label>
    <input id="vorname" type="text" name="vorname" placeholder="Vorname" value="<?php if($_POST){echo $_POST['vorname']; } ?>" required />
    
    <label for="nachname">Nachname*</label>
    <input id="nachname" type="text" name="nachname" placeholder="Nachname" value="<?php if($_POST){echo $_POST['nachname']; } ?>" required />
    
    <label for="email">Email*</label>
    <input id="email" type="text" name="email" placeholder="Email" value="<?php if($_POST){echo $_POST['email']; } ?>" required />

    <label for="password">Passwort*</label>
    <input id="passwort" type="password" name="passwort" value="<?php if($_POST){echo $_POST['passwort']; } ?>" required />

    <label for="admin">Admin*</label>
    <select name="admin">
        <option value="">Bitte wählen</option>
        <?php
        $admin = array('ja', 'nein');
        foreach($admin as $key=>$val):
        ?>    
        <option <?php if(isset($_POST['admin']) && $_POST['admin'] == $key){ echo 'selected';} ?> value="<?php e($key); ?>">
            <?php e($val); ?>
        </option>
        <?php endforeach; ?>
    </select>
    
    <input id="submit" type="submit" name="createbenutzer" value="senden">
    <a id="delete" href="index.php?action=users">Abbrechen</a>
</form>