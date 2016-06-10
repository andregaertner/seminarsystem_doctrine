<?php
/**
 * 
 * @return formlogin or logout obj 
 */
function headForm()
{
    
    if(isset($_SESSION['user']))
    {
        $form = '<a id="logout" href="index.php?action=logout">logout</a>';
    }
    else{
        
        $form = '<form method="post" action="index.php?action=login">';
        $form .=  '<input name="email" type="text" placeholder="email" />';
        $form .= '<input name="password" type="password" placeholder="password" />';
        $form .= '<input name="submit" type="submit" value="senden" />';
        $form .= '<span>Noch nicht registiert?<a id="reg" href="?page=registrieren">jetzt registrieren</a></span>';
        $form .= '</form>';
        
    };
                
    return $form;
}