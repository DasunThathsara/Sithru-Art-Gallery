<?php
$titlle = 'Contact Us';
include_once '../../includes/header.php';
include_once '../../includes/dbh.inc.php';
?>
    <div class="container p-5">
            <div class="row">    
            <h2 class=" mb-4">Contact</h2>            
                <div class='col-xl-5 col-lg-4'>
                    <table>
                        <tr>
                            <td>Email: &nbsp</td>
                            <td><a href="mailto:easelgossip@gmail.com" target="_blank">
                                easelgossip@gmail.com</a></td>
                        </tr>
                        <tr>
                            <td>Phone: &nbsp</td>
                            <td><a href="tel:+94702754756">+94 70 275 4756</a></td>
                        </tr>
                        <tr>
                            <td>Facebook: &nbsp</td>
                            <td><a href="https://www.facebook.com/profile.php?id=100088902815217">EASEL</a></td>
                        </tr>
                        <tr>
                            <td>Address: &nbsp</td>
                            <td>Colombo, Sri Lanka</td>
                        </tr>
                    </table>
                </div>
                <!-- <div class="col-xl-7 col-lg-5">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126743.63215406965!2d79.77380325830434!3d6.9218315609127865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae253d10f7a7003%3A0x320b2e4d32d3838d!2sColombo!5e0!3m2!1sen!2slk!4v1685430463050!5m2!1sen!2slk" 
                    width="400" height="450" style="border:0;" allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                
                </div> -->
            </div>

    </div>
<!-- Back to top button -->
<button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
    <i class="fas fa-arrow-up"></i>
</button>

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