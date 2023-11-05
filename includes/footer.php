<!-- Back to top button -->
<button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
    <i class="fas fa-arrow-up"></i>
</button>

<footer class="bg-light text-center text-white">
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
                window.location ='/EASEL_magazine/includes/autologout.inc.php' ;
            }
        </script>";
    }
?>  


</body>
</html>