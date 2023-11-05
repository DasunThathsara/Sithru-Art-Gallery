<?php
$titlle = 'Dashboard';
    include_once '../includes/header.php';
    include_once '../includes/dbh.inc.php';

if(isset($_SESSION["userfname"]))
{
    ?>
        <div class="container">
            <h3 class="mt-4">Welcome to Dashboard</h3>
                <div class="row p-4">
                    <?php

                        $sql = "SELECT * FROM magazine ORDER BY id DESC";
                        $res = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($res) > 0){
                            while ($row = mysqli_fetch_assoc($res)){
                    ?>

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-5 col-9 mb-5 d-block bg-white text-dark align-self-center">
                        <?php echo "<a href='view_card.php?id=$row[id]'>" ?> 
                            <div class="bg-white rounded shadow text-dark" >
                                <img class="img-fluid card-img-top img-thumbnail rounded" src="../mag_img/<?=$row['photo']?>" alt="">
                                <h4 class="pt-1 mx-3"><?=$row['title']?></h4>
                                <p class="pb-3 mx-3"><?=$row['description']?></p>
                            </div>
                        </a>
                        <div class="bg-white rounded text-dark">
                            <?php echo "                        
                                <a href='edit.php?id=$row[id]' class='btn btn-sm btn-primary btn-block'>Edit</a>
                                <a href='../controllers/delete.php?id=$row[id]' class='btn btn-sm btn-primary btn-block' onclick=\"return confirm('Are you sure you want to delete this item?')\">Delete</a>
                            "?>
                        </div>
                    </div>
                    <?php
                        }
                        }
                        ?>
                </div>        
        </div>
        <div class="container" style="width:50%">
            <div class="text-center">
                <a href="create_mag.php" class="btn btn-primary btn-block mb-4">Upload New</a>
            </div>
        </div>

    <?php
    include_once '../includes/footer.php';

}
else{
    header('Location:login.php');
    exit();
}

?>