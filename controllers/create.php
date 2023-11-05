<?php

if (isset($_POST['upload']) && isset($_FILES['photo'])) {

    include_once '../includes/function.inc.php';
    include_once '../includes/dbh.inc.php';


    $title = "";
    $description = "";

    $errorMessage = "";
    $successMessage = "";

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $title = $_POST["title"];
        $description = $_POST["description"];
    }

    $cover = upload($title, $description, $conn, 'photo');
    $p1 = upload($title, $description, $conn, 'p1');
    $p2 = upload($title, $description, $conn, 'p2');
    $p3 = upload($title, $description, $conn, 'p3');
    $p4 = upload($title, $description, $conn, 'p4');
    $p5 = upload($title, $description, $conn, 'p5');
    $p6 = upload($title, $description, $conn, 'p6');
    $p7 = upload($title, $description, $conn, 'p7');
    $p8 = upload($title, $description, $conn, 'p8');
    $p9 = upload($title, $description, $conn, 'p9');
    $p10 = upload($title, $description, $conn, 'p10');
    $p11 = upload($title, $description, $conn, 'p11');
    $p12 = upload($title, $description, $conn, 'p12');
    $p13 = upload($title, $description, $conn, 'p13');
    $p14 = upload($title, $description, $conn, 'p14');
    $p15 = upload($title, $description, $conn, 'p15');

    $sql = "INSERT INTO magazine(title, description, photo, p1, p2, p3, p4, p5, p6, p7, p8, p9, p10, p11, p12, p13, p14, p15) VALUES('$title','$description', '$cover', '$p1', '$p2', '$p3', '$p4', '$p5', '$p6', '$p7', '$p8', '$p9', '$p10', '$p11', '$p12', '$p13', '$p14', '$p15')";
    mysqli_query($conn, $sql);
    header("Location: ../admin/index.php");
    exit();
}
else{
    header("Location: ../admin/create_mag.php");
    exit();
}