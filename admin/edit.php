<?php
$titlle = 'Edit Magazine';
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
    $sql = "SELECT * FROM magazine WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if(!$row){
        header("location: index.php");
        exit;
    }

    $title = $row["title"];
    $description = $row["description"];
    $photo = $row["photo"];
    $p1 = $row["p1"];
    $p2 = $row["p2"];
    $p3 = $row["p3"];
    $p4 = $row["p4"];
    $p5 = $row["p5"];
    $p6 = $row["p6"];
    $p7 = $row["p7"];
    $p8 = $row["p8"];
    $p9 = $row["p9"];
    $p10 = $row["p10"];
    $p11 = $row["p11"];
    $p12 = $row["p12"];
    $p13 = $row["p13"];
    $p14 = $row["p14"];
    $p15 = $row["p15"];

    $pg = array('photo', 'p1', 'p2', 'p3', 'p4', 'p5', 'p6', 'p7', 'p8', 'p9', 'p10', 'p11', 'p12', 'p13', 'p14', 'p15');
    $pg1 = array($photo, $p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8, $p9, $p10, $p11, $p12, $p13, $p14, $p15);
}
else{
    $id = $_POST["id"];
    $title = $_POST["title"];
    $description = $_POST["description"];
    $photo = $_POST["photo"];

    do{
        $sql = "UPDATE magazine " .
            "SET title = '$title', description = '$description' " .
            "WHERE id=$id";

        $result = $conn->query($sql);

        if(!$result){
            $errorMessage = "Invalid query: " . $conn->error;
            break;
        }

        $successMessage = "Magazine updated successfully";

        header("location: index.php");
        exit;

    }while(false);
}

?>

                <div class="container">

                <h3 class="mt-4 mb-5">Magazine edit page</h3>
                    <?php
                    if(!empty($errorMessage)){
                        echo "
                                    <div class='alert-warning alert-dismissible fade show' role='alert'>
                                        <strong>$errorMessage</strong>
                                    </div>
                                ";
                    }
                    ?>

                    <form method="post">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <div class="row mb-3">
                            <div class="col-sm-6" style="text-align: left;">
                                <table width="100%">
                                    <tr>
                                        <td width="10%">
                                            <lable class="col-sm-3 col-form-lable">Title:</lable>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="title" value="<?php echo $title; ?>" />
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-sm-6" style="text-align: left;">
                                <table width="100%">
                                    <tr>
                                        <td width="10%">
                                            <lable class="col-sm-3 col-form-lable">Subtitle:</lable>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" name="description" value="<?php echo $description; ?>" />
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row p-4">
                            <?php
                            $count = 0;
                            while ($count <= 15) {
                                if ($pg1[$count] != null) {
                                    ?>
                                    <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6 col-10 mb-5 d-block bg-white text-dark align-self-center">
                                        <div class="bg-white rounded shadow text-dark">
                                            <img class="img-fluid card-img-top img-thumbnail rounded" src="/EASEL_magazine/mag_img/<?=$row[$pg[$count]]?>" alt="">
                                            <a href="edit_img.php?id=<?php echo $id; ?>&image=<?=$pg[$count]?>" class='btn btn-primary btn-block'>Update</a>
                                            <a href="#" class='btn btn-primary btn-block' onclick="confirmDelete('<?php echo $id; ?>', '<?=$pg[$count]?>')">Delete</a>
                                        </div>
                                    </div>
                                    <?php
                                } else {
                                    ?>
                                    <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6 col-10 mb-5 d-block bg-white text-dark align-self-center">
                                        <div class="bg-white rounded shadow text-dark">
                                            <div class="img-thumbnail rounded">
                                                <h5 class="text-center">No Photo</h5>
                                            </div>
                                            <a href="edit_img.php?id=<?php echo $id; ?>&image=<?=$pg[$count]?>" class='btn btn-primary btn-block'>Upload Photo</a>
                                        </div>
                                    </div>
                                    <?php
                                }
                                $count++;
                            }
                            ?>
                        </div>

                        <script>
                            function confirmDelete(id, image) {
                                var result = confirm("Are you sure you want to delete this photo?");

                                if (result) {
                                    var deleteUrl = "../controllers/delete_img.php?id=" + id + "&image=" + image;
                                    window.location.href = deleteUrl;
                                } else {
                                    alert("Deletion canceled.");
                                }
                            }
                        </script>


                        <?php
                            if(!empty($successMessage)){
                                echo "
                                       <div class='row mb-3'>
                                           <div class='row mb-3 col-sm-12'>
                                               <div class='alert alert-success alert-dismissible fade show' role='alert'>
                                                   <strong>$successMessage</strong>
                                                   <button type='button' class='btn-close' data-bs-dismiss='alert' aria-lable='Close'></button>
                                               </div>
                                           </div>
                                       </div>
                                   ";
                            }
                        ?>

                        <div class="row mb-3" style="text-align: center; padding-left: 30%; padding-right:30%;">
                            <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>
                            <a href="index.php" class="btn btn-primary btn-block mb-4">Back to list</a>
                        </div>
                    </form>
                </div>
            </div>
        </section>

<?php
include_once '../includes/footer.php';

}
else{
    header('Location:login.php');
    exit();
}

?>