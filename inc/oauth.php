<?php

class Oauth
{
    public function checkLogin($em, $password)
    {
        $query = $em
            ->createQueryBuilder()
            ->select('b')
            ->from('Models\Benutzer', 'b')
            ->find($_SESSION['email'])    
            ->getQuery()
        ;
		
        $userpassword = $query->getResult();
        echo $userpasssowrd;
        
        if($password === 'andre')
        {
            $_SESSION['user'] = true;
            $_SESSION['userid'] = 1;
            $_SESSION['name']   = 'andre';
            redirect('index.php');
        }    
    }
    
    public function checkLogout()
    {
        session_destroy();
        redirect('index.php');
    }    
    
    public  function test()
    {
        return 'true';
    }
}