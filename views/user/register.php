<?php
$titlle = 'Publish Article';
include_once '../../includes/header.php';
?>

<div class="container">
  <h5 class="p-5" >පහත විස්තර ඇතුලත් කර අදාල ක්ෂේත්‍රය තෝරන්න</h5>
</div>
<div class="container mt-3" style="width:50%;">
<form action="../../includes/register.inc.php" method="post">
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <!-- <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="text" name="fName" class="form-control" />
        <label class="form-label">First name</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="text" name="lName" class="form-control" />
        <label class="form-label">Last name</label>
      </div>
    </div>
  </div> -->


  <div class="form-outline mb-4">
    <input type="text" name="fname" class="form-control" required />
    <label class="form-label">Name</label>
  </div>

  <div class="form-outline mb-4">
    <input type="text" name="contact" class="form-control" required />
    <label class="form-label">Contact Details</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="text" name="insta" class="form-control" />
    <label class="form-label">Instagram</label>
  </div>

  <div class="form-outline mb-4">
    <input type="text" name="fb" class="form-control" />
    <label class="form-label">Facebook</label>
  </div>

  <!-- Checkbox -->
  <!-- <div class="form-check d-flex justify-content-center mb-4">
    <input class="form-check-input me-2" type="checkbox" value="" />
    <label class="form-check-label">
      Subscribe to our newsletter
    </label>
  </div> -->

  <!-- Submit button -->
  <!-- <button type="submit" name="photo" class="btn btn-primary btn-block mb-4">Photograper</button>
  <button type="submit" name="model" class="btn btn-primary btn-block mb-4">Model</button> -->

  <?php
    if(isset($_GET["error"]))
    {
      if($_GET["error"] =="stmtfailed")
      {
        echo '<div class="alert alert-danger">Somethig went wrong !</div>';
      }
      else if($_GET["error"] == "none")
      {
        echo '<div class="alert alert-success">Your information has been submitted successfully !</div>';
      }
    }
  ?>

  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <button type="submit" name="photo" class="btn btn-primary btn-block mb-4">Photographer</button>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <button type="submit" name="model" class="btn btn-primary btn-block mb-4">Model</button>
      </div>
    </div>
  </div>
  
  
</form>
</div>

<footer class="bg-light text-center text-white" style="position: absolute; width: 100%; bottom: 0px;">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
        <!-- Section: Social media -->
        <section class="mb-4">
            <!-- Blogger -->
            <button class="btn text-white btn-floating m-1">
                <a
                        class="btn text-white btn-floating m-1"
                        style="background-color: #fc4f08;"
                        href="https://WWW.EASELGOSSIP.COM"
                        target="_blank"
                        role="button"
                ><i class="fab fa-blogger-b"></i></a></button>


            <!-- whatsapp -->
            <button class="btn text-white btn-floating m-1">
                <a
                        class="btn text-white btn-floating m-1"
                        style="background-color: #25D366;"
                        href="https://wa.me/+94702754756"
                        target="_blank"
                        role="button"
                ><i class="fab fa-whatsapp fa-lg"></i></a></button>

            <!-- Google -->
            <button class="btn text-white btn-floating m-1">
                <a
                        class="btn text-white btn-floating m-1"
                        style="background-color: #dd4b39;"
                        href="mailto:easelgossip@gmail.com"
                        target="_blank"
                        role="button"
                ><i class="fab fa-google"></i></a></button>

            <!-- Facebook -->
            <button class="btn text-white btn-floating m-1">
                <a
                        class="btn text-white btn-floating m-1"
                        style="background-color: #3b5998;"
                        href="https://www.facebook.com/profile.php?id=100088902815217"
                        target="_blank"
                        role="button"
                ><i class="fab fa-facebook-f"></i></a></button>

            <!-- Youtube -->
            <button class="btn text-white btn-floating m-1">
                <a
                        class="btn text-white btn-floating m-1"
                        style="background-color: #FF0000;"
                        href="https://WWW.youtube.COM/@EASELGOSSIP"
                        target="_blank"
                        role="button"
                ><i class="fab fa-youtube"></i></a></button>
        </section>
        <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2023 Copyright:
        <a class="text-white" href="#">Infinity Web Solutions (pvt) ltd</a>
    </div>
    <!-- Copyright -->
</footer>

<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>

<script>
    //Get the button
    let mybutton = document.getElementById("btn-back-to-top");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
        scrollFunction();
    };

    function scrollFunction() {
        if (
            document.body.scrollTop > 20 ||
            document.documentElement.scrollTop > 20
        ) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }
    // When the user clicks on the button, scroll to the top of the document
    mybutton.addEventListener("click", backToTop);

    function backToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>

<?php
if(isset($_SESSION["userfname"]))
{// 900000
    echo "
        <script>
            setTimeout(logout,900000);
            function logout(){
                window.location ='autologout.inc.php' ;
            }
        </script>";
}
?>


</body>
</html>