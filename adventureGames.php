<!DOCTYPE html>
<html lang="en">
<?php

require "func.php";
session_start();

if (!isset($_SESSION["data"])) {
    header("Location: index.php");
    exit;
}


$namaUser = $_SESSION["data"][0]['nama'];

$data = query("SELECT * FROM database_card where kategori='Adventure'");
$email = $_SESSION["data"][0]['email'];
$nama['data'] = query("SELECT nama FROM database_porto1_user where email = '$email'");
$nama = $nama['data'][0]['nama'];


?>

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Games</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->
<div class="loader_bg">
    <div class="loader"><img src="images/loading1.gif" alt="#" /></div>
</div>

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading1.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header style="background-color: white;">
        <!-- header inner -->
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="logo">
                                <a href="index.html"><img src="images/sijago-logo-removebg-preview.png" class="img-fluid w-50 h-50" style="margin-top: -20px" alt="#" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <nav class="navigation navbar navbar-expand-md navbar-dark  ">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarsExample04">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item" style="padding: 10px 5px;">
                                        <a class="nav-link" href="indexAfterLogin.php">Home</a>
                                    </li>
                                    <li class="nav-item" style="padding: 10px 5px;">
                                        <a class="nav-link" href="newsAfterLogin.php">News</a>
                                    </li>
                                    <li class="nav-item dropdown active" style="padding: 10px 5px;">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            More Games
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="actionGames.php">Action</a></li>
                                            <li><a class="dropdown-item" href="survivalGames.php">Survival</a></li>
                                            <li><a class="dropdown-item" href="racingGames.php">Racing</a></li>
                                            <li><a class="dropdown-item" href="adventureGames.php">Adventure</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="gamesAfterLogin.php">All Games</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item" style="padding: 10px 5px;">
                                        <a class="nav-link" href="library.php">My Library</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link btn btn-outline-danger text-light mx-3 rounded-pill" style="padding: 10px 20px; border: 3px solid red;" href="profile.php"><span style="margin-right: 10px;"><?php echo $nama ?></span><i class="bi bi-people-fill" style="color: red;"></i></a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link btn btn-outline-danger text-light mx-3 rounded-pill" style="padding: 10px 20px; border: 3px solid red;" href="logout.php">Log Out</a>
                                    </li>

                                    <!-- <li class="nav-item d_none sea_icon">
                                 <a class="nav-link" href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i><i class="fa fa-search" aria-hidden="true"></i></a>
                              </li> -->
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header inner -->
    <!-- end header -->
    <!-- Our  Glasses section -->
    <div class="glasses" style="padding: 100px 0px;">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="titlepage">
                        <h2 style="font-size: 50px">Adventure Games</h2>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <?php for ($i = 0; $i < sizeof($data); $i++) { ?>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="glasses_box">
                            <figure><img src="images/<?php echo $data[$i]['image']; ?>" alt="#" /></figure>
                            <h3><span class="blu">IDR</span><?php echo $data[$i]['harga'] ?></h3>
                            <p><?php echo $data[$i]['nama'] ?></p>
                            <a class="read_more" href="detailgame.php?namaGame=<?php echo  $data[$i]['nama'] ?>">Shop Now</a>
                        </div>
                    </div>
                <?php } ?>
                <!-- 
            <div class="col-md-12">
               <a class="read_more" href="#">Read More</a>
            </div> 
            -->
            </div>
        </div>
    </div>
    <!-- end Our  Glasses section -->
    <!--  footer -->
    <footer class="bg-dark mt-5">
        <div class="container ">

            <div class="row">
                <div class="col-md-12">
                    <p class="text-light mt-5 text-center">&copy; 2023 SIJAGO. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

</body>

</html>