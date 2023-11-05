<?php
$titlle = 'EASEL Magazine';
include_once 'includes/header.php';
include_once 'includes/dbh.inc.php';
?>
    <div class="container-fluid">
        <div class="px-lg-5">

            <!-- For demo purpose -->
            <div class="row d-block"> <!--  mx-auto mt-4  -->
                <div class="col-lg-12"> <!--  mx-auto -->
                    <!-- <div class="text-white p-5 shadow-sm rounded">  p-5 banner -->
                        <!-- <h1 class="display-4">EASEL Magazine</h1>
                        <p class="lead">Subtitle</p>
                        <p class="lead">Another subtitle.</p> -->
                        <img src="banner.jpg" class="img-fluid card-img-top img-thumbnail rounded mt-4" alt="Dispaly banner">
                    <!-- </div> -->
                </div>
            </div>
            <!-- End -->



            <div class="row p-4 justify-content-center">

                <a href="views/user/register.php"><button type="button" class="btn btn-outline-primary mt-2 mb-4 btn-block" data-mdb-ripple-color="info"><h4>ඔබටත් මෙහි Article එකක් පලකර ගැනීමට අවශ්‍ය ද ?</h4></button></a>
                
                <h4 calss="pb-2 pt-4">2023</h4>
                <hr>
                <?php

                $sql = "SELECT * FROM magazine ORDER BY id DESC";
                $res = mysqli_query($conn, $sql);

                if (mysqli_num_rows($res) > 0){
                    while ($row = mysqli_fetch_assoc($res)){ ?>

                <!-- Gallery item -->

                    <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6 col-10 mb-4 d-block cards align-self-center">
                        <?php echo "<a href='views/user/view.php?id=$row[id]'>" ?>
                            <div class="bg-white rounded shadow">
                                <img src="mag_img/<?=$row['photo']?>" alt="" class="img-fluid card-img-top img-thumbnail rounded">
                                <div class="p-4 inner">
                                    <h5 class="text-dark"><?=$row['title']?></h5>
                                    <p class="small text-muted mb-0"><?=$row['description']?></p>
                                </div>
                            </div>
                        </a>
                        <?php echo "<a href='views/user/view.php?id=$row[id]'>" ?>
                            <div class="middle">
                                <div class="textt">View</div>
                            </div>
                        </a>
                    </div>

                    <!-- End -->
                <?php
                    }
                }
                ?>
            </div>

            <!-- <button type="button" class="btn btn-outline-info" data-mdb-ripple-color="dark">ඔබටත් මෙහි Article එකක් පලකර ගැනීමට අවශ්‍ය ද ?</button> -->

        </div>
    </div>
<?php
include_once 'includes/footer.php';
?>