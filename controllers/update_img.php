<?php

if (isset($_POST['upload']) && isset($_FILES['mag_cover'])) {

    include_once '../includes/dbh.inc.php';

    if (!$conn){
        echo "Connection failed!";
        exit();
    }

    $id = "";
    $title = "";
    $description = "";
    $image = "";

    $errorMessage = "";
    $successMessage = "";

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = $_POST["id"];
        $title = $_POST["title"];
        $description = $_POST["description"];
        $image = $_POST["imageID"];
    }

    $img_name = $_FILES['mag_cover']['name'];
    $img_size = $_FILES['mag_cover']['size'];
    $tmp_name = $_FILES['mag_cover']['tmp_name'];
    $error = $_FILES['mag_cover']['error'];

    if ($error === 0){
        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);

        $allowed_exs = array("jpg", "jpeg", "png");

        if (in_array($img_ex_lc, $allowed_exs)){
            // Move into mag_img folder
            $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
            $img_upload_path = '../mag_img/'.$new_img_name;
            move_uploaded_file($tmp_name, $img_upload_path);

            // Insert into Database
            $sql = "UPDATE magazine SET title = '$title', description = '$description', $image = '$new_img_name' WHERE id=$id";
            mysqli_query($conn, $sql);
            header("Location: ../admin/edit.php?id=$id");
            exit();
        }
        else{
            $em = "You can't upload files of this type";
            header("Location: ../admin/edit.php?id=$id?error=$em");
            exit();
        }
    }
    else{
        $em = "unknown error occurred!";
        header("Location: ../admin/edit.php?id=$id?error=$em");
        exit();
    }
}
else{
    header("Location: ../admin/index.php");
    exit();
}