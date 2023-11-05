<?php

function upload($title, $description, $conn, $photo){
    $img_name = $_FILES[$photo]['name'];
    $img_size = $_FILES[$photo]['size'];
    $tmp_name = $_FILES[$photo]['tmp_name'];
    $error = $_FILES[$photo]['error'];


    die($img_size);

    if ($error === 0){
        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);

        $allowed_exs = array("jpg", "jpeg", "png");

        if (in_array($img_ex_lc, $allowed_exs)){
            // Move into mag_img folder
            $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
            $img_upload_path = '../mag_img/'.$new_img_name;
            move_uploaded_file($tmp_name, $img_upload_path);

            return $new_img_name;
        }
        else{
            $em = "You can't upload files of this type";
            header("Location: ../admin/create_mag.php?error=$em");
        }
    }
    else{
        $em = "unknown error occurred!";
        header("Location: ../admin/create_mag.php?error=$em");
    }
}

function emptyInputLogin($username,$pwd){
    $result = false;
    if(empty($username)||empty($pwd))
    {
        $result = true;
    }
    return $result;
}

function loginAdmin($username,$pwd)
{
    if($username !== "user")
    {
        header("Location:../admin/login.php?error=wrongUserName");
        exit();
    }
    if($pwd !== "admin123")
    {
        header("Location:../admin/login.php?error=wrongPassword");
        exit();
    }
    else if($pwd === "admin123")
    {
        session_start();
        $_SESSION["userfname"] = 'Bashitha';
        header("Location:../admin/index.php");
        exit();
    }
}

function createUser($conn,$fname,$contact,$insta,$fb,$rolle,$t,$statust)
{
    $sql = "INSERT INTO users (fname,contact,insta,fb,rolle,t,statust) VALUES ('$fname','$contact','$insta','$fb','$rolle','$t','$statust');";
    if (mysqli_query($conn, $sql)) {
        $id = mysqli_insert_id($conn);
        return $id;
    } else {
        header("Location:../views/user/register.php?error=stmtfailed");
        exit();
    }
    mysqli_close($conn);
}

function updatedb($conn,$id,$q1,$q2,$q3,$q4,$q5,$q6,$q7,$q8,$other)
{
    $sql = "UPDATE users 
            SET q1 = '$q1', q2 = '$q2', q3 = '$q3', q4 = '$q4', q5 = '$q5', q6 = '$q6', q7 = '$q7', q8 = '$q8', other = '$other' 
            WHERE id = '$id'";
    mysqli_query($conn, $sql);
    header('Location:../views/user/register.php?error=none');
    exit();
}