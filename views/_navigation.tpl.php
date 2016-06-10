<ul>
    <li><a <?php if($action === 'startseite' || empty($action)){ echo 'class="active"'; } ?> href="index.php?action=startseite">Home</a></li>
    <li><a <?php if($action === 'seminare'){ echo 'class="active"'; } ?> href="index.php?action=seminare">Seminare</a></li>
    <li><a <?php if($action === 'seminaretermine'){ echo 'class="active"'; } ?> href="index.php?action=seminaretermine">Seminaretermine</a></li>
    <li><a <?php if($action === 'dozenten'){ echo 'class="active"'; } ?> href="index.php?action=dozenten">Dozenten</a></li>
    <li><a <?php if($action === 'kontakt'){ echo 'class="active"'; } ?> href="index.php?action=kontakt">Kontakt</a></li>
    <li><a <?php if($action === 'impressum'){ echo 'class="active"'; } ?> href="index.php?action=impressum">Impressum</a></li>
</ul>