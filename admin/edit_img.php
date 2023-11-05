<?php
$titlle = 'Edit Photo';
include_once '../includes/header.php';
include_once '../includes/dbh.inc.php';

if(isset($_SESSION["userfname"]))
{

$title = "";
$description = "";
$photo = "";

$errorMessage = "";
$successMessage = "";

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    // GET method: show the data of the doctor

    if(!isset($_GET["id"])){
        header("location: index.php");
        exit;
    }

    $id = $_GET["id"];
    $image = $_GET["image"];
    $sql = "SELECT id, title, description, photo FROM magazine WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if(!$row){
        header("location: index.php");
        exit;
    }

    $title = $row["title"];
    $description = $row["description"];
    $photo = $row["photo"];
}?>

            <div class="container text-center p-4" style="height:70vh;">

            <h3 class="p-3 text-left">Edit photo page</h3>
                <?php
                if(!empty($errorMessage)){
                    echo "
                                <div class='alert-warning alert-dismissible fade show' role='alert'>
                                    <strong>$errorMessage</strong>
                                </div>
                            ";
                }
                ?>

                <!-- <div class="mag" style="padding-top: 5%; padding-bottom: 5%; padding-left: 5%;  padding-right: 5%;"> -->
                    <form action="../controllers/update_img.php" method="post" enctype="multipart/form-data">
                        <input hidden name="id" value="<?php echo $id; ?>">
                        <input hidden name="imageID" value="<?php echo $image; ?>">
                        <input hidden type="text" name="title" value="<?php echo $title; ?>"><br />
                        <input hidden type="text" name="description" value="<?php echo $description; ?>"><br />


                        <div class="form-outline mt-5 mb-4" style="margin:auto;width:50%;">
                            <input class="form-control form-control-lg"  type="file" id="mag_cover" name="mag_cover" accept="image/*" required>
                        </div>

                        <div class="container text-center pt-3 mb-4" style="width:50%">
                            <!-- <div class="text-center"> -->
                                <input type="submit" name="upload" value="Upload Photo" class="btn btn-primary btn-block">
                        </div>
                    </form>
                <!-- </div> -->
            </div>

<?php
include_once '../includes/footer.php';

}
else{
    header('Location:login.php');
    exit();
}

?>