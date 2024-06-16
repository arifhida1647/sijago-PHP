<!DOCTYPE html>
<?php
require "func.php";
session_start();

if (!isset($_SESSION["data"])) {
    header("Location: index.php");
    exit;
}


$namaUser = $_SESSION["data"][0]['nama'];
$email = $_SESSION["data"][0]['email'];
$nama['data'] = query("SELECT nama FROM database_porto1_user where email = '$email'");
$nama = $nama['data'][0]['nama'];
$data = query("SELECT * FROM database_card");



?>
<html lang="en">

<head>
  <!-- basic -->
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Home</title>
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

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>




</head>
<!-- body -->

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
                                    <li class="nav-item active" style="padding: 10px 5px;">
                                        <a class="nav-link" href="indexAfterLogin.php">Home</a>
                                    </li>
                                    <li class="nav-item" style="padding: 10px 5px;">
                                        <a class="nav-link" href="newsAfterLogin.php">News</a>
                                    </li>
                                    <li class="nav-item dropdown" style="padding: 10px 5px;">
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
                                    <li class="nav-item " style="padding: 10px 5px;">
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
    <!-- banner -->
    <!-- Register -->

    <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registerModalLabel">Register</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="index_login.php" method="post">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
                        </div>
                        <div class="text-center">
                            <p>Or sign up with:</p>
                            <div class="social-buttons">
                                <button type="button" class="btn btn-primary"><i class="fab fa-google"></i> Sign in with Google</button>
                                <button type="button" class="btn btn-primary"><i class="fab fa-facebook-f"></i> Sign in with Facebook</button>
                                <button type="button" class="btn btn-primary"><i class="fab fa-steam"></i> Sign in with Steam</button>
                            </div>
                            <div class="logo-container">
                                <img src="images/google.png" alt="Google Logo" class="logo-google">
                                <img src="images/steam.png" alt="Facebook Logo" class="logo-facebook">
                                <img src="images/facebook.png" alt="Steam Logo" class="logo-steam">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <!-- end register -->
    <section class="banner_main">
        <div id="banner1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#banner1" data-slide-to="0" class="active"></li>
                <li data-target="#banner1" data-slide-to="1"></li>
                <li data-target="#banner1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="carousel-caption">
                            <div class="text-bg">
                                <h1> <span class="blu">Top 3 Games <br></span>Jedi</h1>
                                <figure><img src="images/jedi.jpg" alt="#" style="border-radius: 20px;" class="shadow-lg" /></figure>
                                <a class="read_more" href="detailgame.php?namaGame=Starwars: Jedi Survival">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="carousel-caption">
                            <div class="text-bg">
                                <h1> <span class="blu">Top 3 Games<br></span>Dead Island 2</h1>
                                <figure><img src="images/Dead Island.png" alt="#" style="border-radius: 20px;" class="shadow-lg" /></figure>
                                <a class="read_more" href="detailgame.php?namaGame=Dead Island 2">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="carousel-caption">
                            <div class="text-bg">
                                <h1> <span class="blu">Top 3 Games<br></span>Cyberpunk 2077</h1>
                                <figure><img src="images/home.png" alt="#" style="border-radius: 20px;" class="shadow-lg" /></figure>
                                <a class="read_more" href="detailgame.php?namaGame=Cyberpunk 2077">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </a>
            <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </a>
        </div>
    </section>

    <!-- end banner -->
    <!-- about section -->
    <div class="about">
        <div class="container">
            <div class="row d_flex">
                <div class="col-md-5">
                    <div class="about_img">
                        <figure><img src="images/valo.png" alt="#" /></figure>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="titlepage">
                        <h2>About Our Shop</h2>
                        <p>Marketplace Game kami adalah platform yang menyediakan berbagai macam permainan dari berbagai pengembang. Di sini, para pemain dapat menemukan dan membeli permainan yang mereka sukai. Marketplace Game kami menawarkan beragam genre permainan, termasuk aksi, petualangan, strategi, puzzle, dan banyak lagi. Para pengembang game dapat mempublikasikan karya mereka di platform kami, memberi pemain akses ke berbagai pilihan permainan yang menarik. Kami berkomitmen untuk memberikan pengalaman bermain yang berkualitas tinggi dan memastikan bahwa setiap pemain dapat menemukan permainan yang sesuai dengan minat dan preferensi mereka.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about section -->
    <!-- Our  Glasses section -->
    <div class="glasses">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="titlepage">
                        <h2 style="font-size: 50px">Our Games</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <?php for ($i = 0; $i < 4; $i++) { ?>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="glasses_box">
                            <figure><img src="images/<?php echo $data[$i]['image']; ?>" alt="#" /></figure>
                            <h3><span class="blu">IDR</span><?php echo $data[$i]['harga'] ?></h3>
                            <p><?php echo $data[$i]['nama'] ?></p>
                            <a class="read_more" href="detailgame.php?namaGame=<?php echo  $data[$i]['nama'] ?>">Shop Now</a>
                        </div>
                    </div>
                <?php } ?>
                <div class="col-md-12">
                    <a class="read_more" href="gamesAfterLogin.php">Show More</a>
                </div>
            </div>
        </div>

    </div>
    <!-- end Our  Glasses section -->
    <!-- Our shop section -->
    <div id="about" class="shop">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5">
                    <div class="shop_img">
                        <figure><img src="images/jedi.jpg" alt="#" style="padding-top: 60px;" /></figure>
                    </div>
                </div>
                <div class="col-md-7 padding_right0">
                    <div class="max_width">
                        <div class="titlepage">
                            <h2>Best Game Ever</h2>
                            <p>Kisah Cal Kestis berlanjut dalam Star Wars Jedi: Survivor™, sebuah permainan aksi-petualangan orang ketiga yang melintasi galaksi, dari Respawn Entertainment, dikembangkan dengan kolaborasi bersama Lucasfilm Games. Judul permainan ini didorong oleh naratif dan ditujukan untuk pemain tunggal, mengambil waktu 5 tahun setelah peristiwa Star Wars Jedi: Fallen Order™, dan mengikuti perjuangan Cal yang semakin putus asa saat galaksi semakin tenggelam dalam kegelapan. Ditekan ke sudut-sudut galaksi oleh Kekaisaran, Cal akan menemukan dirinya dikelilingi oleh ancaman baru dan yang sudah dikenal. Sebagai salah satu ksatria Jedi yang masih hidup, Cal merasa terdorong untuk berdiri selama masa-masa paling gelap galaksi ini - tetapi sejauh mana dia bersedia pergi untuk melindungi dirinya sendiri, kru-nya, dan warisan Ordo Jedi?</p>
                            <a class="read_more" href="#">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Our shop section -->
    <!-- clients section -->
    <div class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Our Team</h2>
                        <p>Tim kami adalah tim yang berbakat dan berdedikasi dengan keahlian yang beragam. Kami bekerja sama untuk mencapai tujuan bersama dengan kreativitas dan semangat tinggi. Kami memiliki komunikasi terbuka, adaptif terhadap perubahan, dan mampu mengatasi tantangan dengan cepat. Dengan kepemimpinan yang kuat dan dedikasi yang tinggi, kami berusaha memberikan kualitas terbaik dalam setiap pekerjaan yang kami lakukan.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="myCarousel" class="carousel slide clients_Carousel " data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                            <li data-target="#myCarousel" data-slide-to="4"></li>
                            <li data-target="#myCarousel" data-slide-to="5"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="container">
                                    <div class="carousel-caption ">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="clients_box">
                                                    <figure><img src="images/kamal.png" alt="#" /></figure>
                                                    <h3>Kamal Ibrahim</h3>
                                                    <p>"Games adalah tempat untuk mengeksplorasi imajinasi, melampaui batasan, dan menemukan potensi yang tersembunyi. Teruslah berani mengambil risiko, coba hal-hal baru, dan jadilah kreatif dalam segala hal yang kamu lakukan. Dunia games adalah tempat yang sempurna untuk merayakan keunikanmu dan mewujudkan impian-impianmu."</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="clients_box">
                                                    <figure><img src="images/cahyo.png" alt="#" /></figure>
                                                    <h3>Mosad Cahyo Usodo</h3>
                                                    <p>"Jangan hanya melihat games sebagai hiburan semata, tetapi lihatlah sebagai medan pelatihan untuk mengasah kemampuanmu. Teruslah bermain, teruslah belajar, dan jadikan setiap tantangan sebagai peluang untuk tumbuh dan berkembang."</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="clients_box">
                                                    <figure><img src="images/arif1.png" alt="#" /></figure>
                                                    <h3>Arif Hidayat</h3>
                                                    <p>"Kesuksesan dalam games membutuhkan ketekunan, konsistensi, dan semangat pantang menyerah. Ingatlah bahwa ketika kamu menghadapi kesulitan di dalam games, hal yang sama berlaku dalam kehidupan nyata. Teruslah melangkah maju, hadapi tantangan, dan keberhasilan akan menjadi milikmu."</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="clients_box">
                                                    <figure><img src="images/jefta.png" alt="#" /></figure>
                                                    <h3>Jefta Supraja</h3>
                                                    <p>"Games mengajarkan kita tentang timbal balik antara usaha dan hasil. Semakin keras kamu berlatih dan semakin fokus kamu bermain, semakin besar pula kemajuan dan prestasi yang dapat kamu capai. Ingatlah bahwa hal yang sama berlaku dalam kehidupan nyata. Berikan usahamu yang terbaik, dan hasil yang memuaskan akan datang."</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="clients_box">
                                                    <figure><img src="images/rana.png" alt="#" /></figure>
                                                    <h3>Ranadea Muhamad Gunawan</h3>
                                                    <p>"Di dalam dunia games, kamu memiliki kekuatan untuk mengendalikan cerita dan takdir karaktermu. Sama seperti dalam kehidupan nyata, kamu memiliki kekuatan untuk mengendalikan arah dan keputusanmu. Gunakan pengalaman dari games untuk menginspirasi dan memberdayakanmu dalam mencapai tujuanmu."</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="clients_box">
                                                    <figure><img src="images/kiput.png" alt="#" /></figure>
                                                    <h3>Rizky Putra Pratama</h3>
                                                    <p>"Kesuksesan dalam games membutuhkan ketekunan, konsistensi, dan semangat pantang menyerah. Ingatlah bahwa ketika kamu menghadapi kesulitan di dalam games, hal yang sama berlaku dalam kehidupan nyata. Teruslah melangkah maju, hadapi tantangan, dan keberhasilan akan menjadi milikmu."</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item active">
                        </div>
                        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                            <i class='fa fa-angle-left'></i>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                            <i class='fa fa-angle-right'></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end clients section -->
    <!-- contact section -->

    </div>
    <!-- end contact section -->
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
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

</body>

</html>