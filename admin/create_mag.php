<?php
$titlle = 'Upload New';
include_once '../includes/header.php';
include_once '../includes/dbh.inc.php';

if(isset($_SESSION["userfname"]))
{
?>
    <?php if (isset($_GET['error'])): ?>
        <p><?php echo $_GET['error'] ?></p>
    <?php endif ?>

    <div class="container">
        <h3 class="mt-4 mb-5">Create Magazine</h3>
    </div>
    <div class="container" style="width:50%;">

        <form action="../controllers/create.php" method="post" enctype="multipart/form-data">
            <div class="form-outline mb-4">
                <input required type="text" class="form-control" name="title">
                <label for="title" class="form-label">Title</label>
            </div>

            <div class="form-outline mb-4">
                <input required type="text" class="form-control" id="description" name="description">                
                <label for="description" class="form-label">Subtitle</label>
            </div>
            
            <span class="drop-title">Cover Photo :</span>
            <div for="images" class="form-outline mb-4">
                <input class="form-control form-control-lg" type="file" id="photo" name="photo" accept="image/*" required>
            </div>

            <span class="drop-title">Page 1 :</span>
            <div for="images" class="form-outline mb-4">
                <input class="form-control form-control-lg" type="file" id="photo" name="p1" accept="image/*">
            </div>

            <span class="drop-title">Page 2 :</span>
            <div for="images" class="form-outline mb-4">
                <input class="form-control form-control-lg" type="file" id="photo" name="p2" accept="image/*">
            </div>

            <span class="drop-title">Page 3 :</span>
            <div for="images" class="form-outline mb-4">
                <input class="form-control form-control-lg" type="file" id="photo" name="p3" accept="image/*">
            </div>

            <span class="drop-title">Page 4 :</span>
            <div for="images" class="form-outline mb-4">
                <input class="form-control form-control-lg" type="file" id="photo" name="p4" accept="image/*">
            </div>

            <span class="drop-title">Page 5 :</span>
            <div for="images" class="form-outline mb-4">
                <input class="form-control form-control-lg" type="file" id="photo" name="p5" accept="image/*">
            </div>

            <span class="drop-title">Page 6 :</span>
            <div for="images" class="form-outline mb-4">
                <input class="form-control form-control-lg" type="file" id="photo" name="p6" accept="image/*">
            </div>

            <span class="drop-title">Page 7 :</span>
            <div for="images" class="form-outline mb-4">
                <input class="form-control form-control-lg" type="file" id="photo" name="p7" accept="image/*">
            </div>

            <span class="drop-title">Page 8 :</span>
            <div for="images" class="form-outline mb-4">
                <input class="form-control form-control-lg" type="file" id="photo" name="p8" accept="image/*">
            </div>

            <span class="drop-title">Page 9 :</span>
            <div for="images" class="form-outline mb-4">
                <input class="form-control form-control-lg" type="file" id="photo" name="p9" accept="image/*">
            </div>

            <span class="drop-title">Page 10 :</span>
            <div for="images" class="form-outline mb-4">
                <input class="form-control form-control-lg" type="file" id="photo" name="p10" accept="image/*">
            </div>

            <span class="drop-title">Page 11 :</span>
            <div for="images" class="form-outline mb-4">
                <input class="form-control form-control-lg" type="file" id="photo" name="p11" accept="image/*">
            </div>

            <span class="drop-title">Page 12 :</span>
            <div for="images" class="form-outline mb-4">
                <input class="form-control form-control-lg" type="file" id="photo" name="p12" accept="image/*">
            </div>

            <span class="drop-title">Page 13 :</span>
            <div for="images" class="form-outline mb-4">
                <input class="form-control form-control-lg" type="file" id="photo" name="p13" accept="image/*">
            </div>

            <span class="drop-title">Page 14 :</span>
            <div for="images" class="form-outline mb-4">
                <input class="form-control form-control-lg" type="file" id="photo" name="p14" accept="image/*">
            </div>

            <span class="drop-title">Page 15 :</span>
            <div for="images" class="form-outline mb-4">
                <input class="form-control form-control-lg" type="file" id="photo" name="p15" accept="image/*">
            </div>


            <!-- <div class="mb-3 form-check">
                <input required type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> -->

            <div class="text-center mt-5 mb-4">
                <input class="btn btn-primary btn-block" type="submit" name="upload" value="Upload">
            </div>
        </form>
    </div>
<?php
include_once '../includes/footer.php';
?>

<?php

}
else{
    header('Location:login.php');
    exit();
}

?>