<h1>Seminartermin erstellen</h1>

<form method="post" action="index.php?action=<?php echo $action?>">
    <label for="beginn">Beginn*</label>
    <input class="datepicker" type="text" name="beginn" placeholder="Beginn" value="<?php if($_POST){echo $_POST['beginn']; } ?>" required />

    <label for="ende">Ende*</label>
    <input class="datepicker" type="text" name="ende" placeholder="Ende" value="<?php if($_POST){echo $_POST['ende']; } ?>"  required />

    <label for="raum">Raum*</label>
    <input id="raum" type="text" name="raum" placeholder="Raum" value="<?php if($_POST){echo $_POST['raum']; } ?>" required />
    
   
   
    <label for="seminar_id">Seminar*</label>
    
    <select name="seminar_id" id="seminar">
        <option value="">Bitte wählen</option>
        <?php foreach($seminare as $seminar): ?> 
            <option <?php if(isset($_POST['seminar_id']) && $_POST['seminar_id'] == $seminar->getId()){ echo 'selected';} ?> value="<?php e($seminar->getId()); ?>">
                <?php e($seminar->getTitel()); ?>
            </option>
        <?php endforeach; ?>
    </select>
    
    <input id="submit" type="submit"  value="senden">
    <a id="delete" href="index.php?action=seminars_dates">Abbrechen</a>
</form>
