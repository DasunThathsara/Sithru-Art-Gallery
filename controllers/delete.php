<?php
if(isset($_GET["id"])){
    $id = $_GET["id"];

    include_once '../includes/dbh.inc.php';

    $sql = "DELETE FROM magazine WHERE id=$id";
    $conn->query($sql);
}

header("location: ../admin/index.php");
exit();