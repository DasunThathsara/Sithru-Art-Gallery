<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/EASEL_magazine/includes/header.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/EASEL_magazine/includes/dbh.inc.php';

if(isset($_SESSION["userfname"]))
{

    $title = "";
    $description = "";
    $photo = "";

    $errorMessage = "";
    $successMessage = "";

    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        if(!isset($_GET["id"])){
            header("location: index.php");
            exit;
        }

        $id = $_GET["id"];
        $image = $_GET["image"];
        $sql = "UPDATE magazine SET $image = '' WHERE id=$id";
        mysqli_query($conn, $sql);
        header("Location: /EASEL_magazine/admin/edit.php?id=$id");
    }
}
else{
    header('Location:../admin/login.php');
    exit();
}