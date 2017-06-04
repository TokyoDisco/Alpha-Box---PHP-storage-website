<?php


function Login()
{
    if(empty($_POST['LOGON']))
    {
        $this->HandleError("UserName is empty!");
        return false;
    }
     
    if(empty($_POST['PASS']))
    {
        $this->HandleError("Password is empty!");
        return false;
    }
     
    $username = trim($_POST['LOGON']);
    $password = trim($_POST['PASS']);
     
    if(!$this->CheckLoginInDB($username,$password))
    {
        return false;
    }
     
    session_start();
     
    $_SESSION[$this->GetLoginSessionVar()] = $username;
     
    return true;
}








?>

