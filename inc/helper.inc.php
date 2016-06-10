<?php
function e($dirty)
{
    echo htmlspecialchars(strip_tags($dirty), ENT_QUOTES);
}

function purify($dirty)
{
    $config = HTMLPurifier_Config::createDefault();
    $purifier = new HTMLPurifier($config);
    echo $purifier->purify($dirty);
}
?>