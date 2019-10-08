<?php 
    $uid = $_POST['uid']; 
    $pw = $_POST['pw']; 
    if($uid == 'Rahul' and $pw == 'password') 
    { 
        session_start(); 
        $_SESSION['sid']=session_id();
        $_SESSION['username']=$uid; 
        header("location:securepage.php"); 
    }
    else
    {
        header("location:login.php");
    } 
?>
