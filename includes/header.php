<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="keywords" content="EASEL_magazine,magazine,sl,,sri lanka,sl magazine,easel,gossip,gossips,sl gossip,sinhala,sinhala gossip,magazine sinhala,models,photography">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo "$titlle";?></title>

    <link rel="stylesheet" href="/EASEL_magazine/css/style.css">
    <link rel="icon" href="/EASEL_magazine/icon.png">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- <link href="font-awesome.min.css" rel="stylesheet" /> -->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet" />
    <!-- <link href="bootstrap.min.css" rel="stylesheet" /> -->



</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Container wrapper -->
    <div class="container-fluid px-lg-5">
        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <!-- Navbar brand -->
        <a class="navbar-brand" href="/EASEL_magazine/index.php">
            <img src="/EASEL_magazine/pp.png" height="30" alt="easel Logo" loading="lazy" />
        </a>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="/EASEL_magazine/index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://WWW.EASELGOSSIP.COM">Gossips</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/EASEL_magazine/views/user/about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/EASEL_magazine/views/user/contact.php">Contact</a>
                </li>
            </ul>
            <!-- Left links -->

            <div class="d-flex align-items-center">
                <?php 
                    if(isset($_SESSION["userfname"]))
                    {
                        echo 'Hi ' , $_SESSION["userfname"] , ' !';
                        echo '<a href="/EASEL_magazine/includes/logout.inc.php"><button type="button" class="btn btn-primary ms-3 me-3"> LogOut </button></a>';
                        echo '<a href="/EASEL_magazine/admin/index.php"><button type="button" class="btn btn-primary ms-2 me-2"> Dashboard </button></a>';
                        echo '<a href="/EASEL_magazine/admin/response.php"><button type="button" class="btn btn-primary ms-2 me-2"> Responses </button></a>';
                    }
                ?>  
            </div>
        </div>
        <!-- Collapsible wrapper -->


    </div>
    <!-- Container wrapper -->
</nav>
<!-- Navbar -->