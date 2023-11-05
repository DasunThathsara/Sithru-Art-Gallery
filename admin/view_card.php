<?php
$titlle = 'Magazine Preview';
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

    $pg = array($photo, $p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8, $p9, $p10, $p11, $p12, $p13, $p14, $p15);
}
?>

<div class="container">
                <?php
                    if(!empty($errorMessage)){
                        echo "
                            <div class='alert-warning alert-dismissible fade show' role='alert'>
                                <strong>$errorMessage</strong>
                            </div>";
                    }?>
        
            <h3 class="mt-4">Sample preview page</h3>
            <h4 class="text-center"><?php echo $title; ?></h4>
            <p class="text-center"><?php echo $description; ?></p>

<!--        <div class="text-center">-->
<!--            <img class="p-4" style="width: 30%;" src="/EASEL_magazine/mag_img/--><?php //=$row['photo']?><!--" alt="--><?php //echo $title; ?><!-- magazine Cover photo">-->
<!--            <img class="p-4" style="width: 30%;" src="/EASEL_magazine/mag_img/--><?php //=$row['p1']?><!--" alt="">-->
<!--            <img class="p-4" style="width: 30%;" src="/EASEL_magazine/mag_img/--><?php //=$row['p2']?><!--" alt="">-->
<!--            <img class="p-4" style="width: 30%;" src="/EASEL_magazine/mag_img/--><?php //=$row['p3']?><!--" alt="">-->
<!--            <img class="p-4" style="width: 30%;" src="/EASEL_magazine/mag_img/--><?php //=$row['p4']?><!--" alt="">-->
<!--            <img class="p-4" style="width: 30%;" src="/EASEL_magazine/mag_img/--><?php //=$row['p5']?><!--" alt="">-->
<!--            <img class="p-4" style="width: 30%;" src="/EASEL_magazine/mag_img/--><?php //=$row['p6']?><!--" alt="">-->
<!--            <img class="p-4" style="width: 30%;" src="/EASEL_magazine/mag_img/--><?php //=$row['p7']?><!--" alt="">-->
<!--            <img class="p-4" style="width: 30%;" src="/EASEL_magazine/mag_img/--><?php //=$row['p8']?><!--" alt="">-->
<!--            <img class="p-4" style="width: 30%;" src="/EASEL_magazine/mag_img/--><?php //=$row['p9']?><!--" alt="">-->
<!--            <img class="p-4" style="width: 30%;" src="/EASEL_magazine/mag_img/--><?php //=$row['p10']?><!--" alt="">-->
<!--            <img class="p-4" style="width: 30%;" src="/EASEL_magazine/mag_img/--><?php //=$row['p11']?><!--" alt="">-->
<!--            <img class="p-4" style="width: 30%;" src="/EASEL_magazine/mag_img/--><?php //=$row['p12']?><!--" alt="">-->
<!--            <img class="p-4" style="width: 30%;" src="/EASEL_magazine/mag_img/--><?php //=$row['p13']?><!--" alt="">-->
<!--            <img class="p-4" style="width: 30%;" src="/EASEL_magazine/mag_img/--><?php //=$row['p14']?><!--" alt="">-->
<!--            <img class="p-4" style="width: 30%;" src="/EASEL_magazine/mag_img/--><?php //=$row['p15']?><!--" alt="">-->
<!--        </div>-->

    <section class="image-grid">
        <div class="container-xxl">
            <div class="row gy-4">
                <?php
                $count = 1;
                foreach ($pg as $element) {
                    if ($element != null){
                        echo "
                                <div class='col-12 col-sm-6 col-md-4'>
                                    <figure>
                                        <a class='d-block' href=''>
                                            <img class='p-4 img-fluid' style='width: 100%;' src='../mag_img/$element' alt=''  data-caption='Page $count'>
                                        </a>
                                    </figure>
                                </div>
                            ";
                        $count++;
                    }
                } ?>
            </div>
        </div>
    </section>

    <div class="modal lightbox-modal" id="lightbox-modal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="container-fluid p-0">
                        <!-- JS content here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
<script>
    const imageGrid = document.querySelector(".image-grid");
    const links = imageGrid.querySelectorAll("a");
    const imgs = imageGrid.querySelectorAll("img");
    const lightboxModal = document.getElementById("lightbox-modal");
    const bsModal = new bootstrap.Modal(lightboxModal);
    const modalBody = document.querySelector(".modal-body .container-fluid");

    for (const link of links) {
        link.addEventListener("click", function (e) {
            e.preventDefault();
            const currentImg = link.querySelector("img");
            const lightboxCarousel = document.getElementById("lightboxCarousel");
            if (lightboxCarousel) {
                const parentCol = link.parentElement.parentElement;
                const index = [...parentCol.parentElement.children].indexOf(parentCol);
                const bsCarousel = new bootstrap.Carousel(lightboxCarousel);
                bsCarousel.to(index);
            } else {
                createCarousel(currentImg);
            }
            bsModal.show();
        });
    }

    function createCarousel(img) {
        const markup = `
                    <div id="lightboxCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="false">
                    <div class="carousel-inner">
                        ${createSlides(img)}
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#lightboxCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#lightboxCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    </div>
                    `;

        modalBody.innerHTML = markup;
    }

    function createSlides(img) {
        let markup = "";
        const currentImgSrc = img.getAttribute("src");

        for (const img of imgs) {
            const imgSrc = img.getAttribute("src");
            const imgAlt = img.getAttribute("alt");
            const imgCaption = img.getAttribute("data-caption");

            markup += `
                        <div class="carousel-item${currentImgSrc === imgSrc ? " active" : ""}">
                        <img src=${imgSrc} alt=${imgAlt}>
                        ${imgCaption ? createCaption(imgCaption) : ""}
                        </div>
                        `;
        }

        return markup;
    }

    function createCaption(caption) {
        return `<div class="carousel-caption">
                    <p class="m-0">${caption}</p>
                    </div>`;
    }
</script>

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