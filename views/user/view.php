<?php
include_once '../../includes/dbh.inc.php';

$title = "";
$description = "";
$photo = "";

$errorMessage = "";
$successMessage = "";

if($_SERVER['REQUEST_METHOD'] == 'GET'){

    if(!isset($_GET["id"])){
        header("location: ../../index.php");
        exit;
    }

    $id = $_GET["id"];
    $sql = "SELECT * FROM magazine WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if(!$row){
        header("location: ../../index.php");
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

    $titlle = $title.' Magazine';    
include_once '../../includes/header.php';
}?>
        <div class="container">
            <?php
                if(!empty($errorMessage)){
                    echo "<div class='alert-warning alert-dismissible fade show' role='alert'>strong>$errorMessage</strong></div>";
            }?>

            <div class="text-center mt-5">
                <h2><?php echo $title; ?></h2>
                <p><?php echo $description; ?></p>
            </div>

            <section class="image-grid">
                <div class="text-center">
                    <?php
//                    $count = 1;
                    foreach ($pg as $element) {
                        if ($element != null){
                            echo "
                                  <a class='d-block' href=''>
                                    <img class='mb-3 img-fluid' src='../../mag_img/$element' alt=''>
                                  </a>
                                ";
                            //data-caption='Page $count'
//                            $count++;
                        }
                    } ?>
                </div>
            </section>
        </div>

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
    include_once '../../includes/footer.php';
?>