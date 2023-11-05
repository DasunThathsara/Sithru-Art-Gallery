<?php
if(isset($_POST["photo"]))
{
    $fname = $_POST["fname"];
    $contact = $_POST["contact"];
    $insta = $_POST["insta"];
    $fb = $_POST["fb"];
    $rolle = "Photographer";
    $t=time();
    $statust = 0;

    require_once 'dbh.inc.php';
    require_once 'function.inc.php';

    $id = createUser($conn,$fname,$contact,$insta,$fb,$rolle,$t,$statust);

    header("Location:../views/user/photo.php?id=$id");
    exit();
}
else if(isset($_POST["model"]))
{
    $fname = $_POST["fname"];
    $contact = $_POST["contact"];
    $insta = $_POST["insta"];
    $fb = $_POST["fb"];
    $rolle = "Model";
    $t=time();
    $statust = 0;
    
    require_once 'dbh.inc.php';
    require_once 'function.inc.php';
    
    $id = createUser($conn,$fname,$contact,$insta,$fb,$rolle,$t,$statust);
    
    header("Location:../views/user/model.php?id=$id");
    exit();
}
else if(isset($_POST["submit"]))
{
    echo 'Hi1 ';
    $id = $_POST["id"];
    $q1 = $_POST["q1"];
    $q2 = $_POST["q2"];
    $q3 = $_POST["q3"];
    $q4 = $_POST["q4"];
    $q5 = $_POST["q5"];
    $q6 = $_POST["q6"];
    $q7 = $_POST["q7"];
    $q8 = $_POST["q8"];
    $other = $_POST["other"];

    require_once 'dbh.inc.php';
    require_once 'function.inc.php';

    updatedb($conn,$id,$q1,$q2,$q3,$q4,$q5,$q6,$q7,$q8,$other);
    exit();    
}
else{
    header('Location:../views/user/register.php;');
    exit();
}