<?php
session_start();
$admins=array("Maram","Roua","Saif");

    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $user=$_POST['username'];
        if(in_array($user, $admins))
        {
            $_SESSION['user']=$user;
            header('REFRESH:0;url=admin.php');
        }
        else
        {
            echo" Sorry You Are Not Admin So You Cant Brose This Page";

        }
        
        
    }


else{
    echo"Error You Cant Brose This Page";
}



?>
