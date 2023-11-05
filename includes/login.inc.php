<?php
if(isset($_POST["submit"]))
{
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    require_once 'function.inc.php';

    if(emptyInputLogin($username,$pwd)!== false)
    {
        header("Location:login.php?error=emptyInput");
        exit();
    }

    loginAdmin($username,$pwd);
}
else{
    header('Location:../admin/login.php');
    exit();
}