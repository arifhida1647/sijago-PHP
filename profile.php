<html lang="en">
<?php
require "func.php";
session_start();

if (!isset($_SESSION["data"])) {
    header("Location: index.php");
    exit;
}
$email = $_SESSION["data"][0]['email'];
$password = $_SESSION["data"][0]['password'];
$dataUser['data'] = query("SELECT * FROM database_porto1_user where email = '$email'");

if (isset($_POST['submit'])) {
    if (update($_POST, $email) == true) {
        header("Location: profile.php");
    }
}
$error = 0;
if (isset($_POST['change'])) {
    if ($dataUser['data'][0]['password'] == $_POST['passwordLama']) {
        if (updatePassword($_POST, $email) == true) {
            $error = 1;
        }
    } else {
        $error = 2;
    }
}
$delete = 0;
if (isset($_POST['delete'])) {
    if ($dataUser['data'][0]['password'] == $_POST['password']) {
        if (delete($email) == true) {
            session_start(); // Memulai sesi

            // Menghapus semua data sesi
            session_unset();

            // Menghancurkan sesi
            session_destroy();

            header("Location: login.php");
        }
    } else {
        $delete = 2;
    }
}

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
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

    <title>Profile</title>
    <style>
        body {
            background: white;
        }

        .loader_bg {
            position: fixed;
            z-index: 9999999;
            background: #ffff;
            width: 100%;
            height: 100%;
        }

        .loader {
            height: 100%;
            width: 100%;
            position: absolute;
            left: 0;
            top: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .loader img {
            width: 280px;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #BA68C8
        }

        .profile-button {
            background: red;
            box-shadow: none;
            border: none
        }

        .profile-button:hover {
            background: #682773
        }

        .profile-button:focus {
            background: #682773;
            box-shadow: none
        }

        .profile-button:active {
            background: #682773;
            box-shadow: none
        }

        .back:hover {
            color: #682773;
            cursor: pointer
        }

        .labels {
            font-size: 11px
        }

        .add-experience:hover {
            background: #BA68C8;
            color: #fff;
            cursor: pointer;
            border: solid 1px #BA68C8
        }

        .form-control:hover {
            border: red 2px solid;
        }
    </style>
</head>

<body class="main-layout">
    <div class="loader_bg">
        <div class="loader"><img src="images/loading1.gif" alt="#" /></div>
    </div>
    <div class="d-flex justify-content-center mt-5 mb-5" style="padding: 20px;">
        <div class="container rounded-4 bg-white mt-5 mb-5 shadow-lg " style="width: 100%; height:100%; border: 3px solid red;">
            <div class="row" style="margin: 50px;">
                <div class="col-md-3 border-right border-danger" height="1000px">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5 "><img class="rounded-circle mt-5 " width="300px" style="height: 200px;" src="images/arif.JPG"><span class="font-weight-bold" style="margin-top: 20px;"><?php echo $dataUser['data'][0]["nama"] ?></span><span class="text-black-50"><?php echo $dataUser['data'][0]["email"] ?></span><span> </span></div>
                </div>
                <div class="col-md-5 border-right border-danger">

                    <div class="p-3 py-5">
                        <p style="font-size: 15px; color: grey;"> <a href="indexAfterLogin.php"> Home </a>/Profile</p>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right text-danger">Profile Settings</h4>
                        </div>
                        <form action="" method="POST">
                            <div class="row mt-2">
                                <div class="col-md-6"><label class="labels">First Name</label><input type="text" class="form-control" placeholder="<?php echo $dataUser['data'][0]["nama"] ?>" value="<?php echo $dataUser['data'][0]["nama"] ?>" name="nama"></div>
                                <div class="col-md-6"><label class="labels">Last Name</label><input type="text" class="form-control" placeholder="<?php echo $dataUser['data'][0]["last_name"] ?>" value="<?php echo $dataUser['data'][0]["last_name"] ?>" name="last_name"></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12"><label class="labels" style="font-size: 13px; margin-top: 10px">Mobile Number</label><input type="text" class="form-control" placeholder="<?php echo $dataUser['data'][0]["phone"] ?>" value="<?php echo $dataUser['data'][0]["phone"] ?>" name="phone"></div><br>
                                <div class="col-md-12"><label class="labels" style="font-size: 13px; margin-top: 10px">Home Number</label><input type="text" class="form-control" placeholder="<?php echo $dataUser['data'][0]["phone_home"] ?>" value="<?php echo $dataUser['data'][0]["phone_home"] ?>" name="phone_home"></div>
                                <div class="col-md-12"><label class="labels" style="font-size: 13px; margin-top: 10px">Address Line 1</label><input type="text" class="form-control" placeholder="<?php echo $dataUser['data'][0]["address"] ?>" value="<?php echo $dataUser['data'][0]["address"] ?>" name="address"></div><br>
                                <div class="col-md-12"><label class="labels" style="font-size: 13px; margin-top: 10px">Address Line 2</label><input type="text" class="form-control" placeholder="<?php echo $dataUser['data'][0]["address2"] ?>" value="<?php echo $dataUser['data'][0]["address2"] ?>" name="address2"></div>

                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="<?php echo $dataUser['data'][0]["country"] ?>" value="<?php echo $dataUser['data'][0]["country"] ?>" name="country"></div>
                            </div>
                            <div class="mt-5 text-center"><button class="btn btn-danger profile-button" type="submit" name="submit">Save Profile</button></div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3 py-5">
                        <div class="col-md-12"><span>Change Password</span></div><br>
                        <?php if ($error == 1) { ?>
                            <div class="alert alert-success col-md-12" role="alert" style="font-size: 13px;">
                                password berhasil di ubah
                            </div>
                        <?php } ?>
                        <?php if ($error == 2) { ?>
                            <div class="alert alert-danger col-md-12" role="alert" style="font-size: 13px;">
                                password salah
                            </div>
                        <?php } ?>
                        <form action="" method="POST">
                            <div class="col-md-12"><label class="labels">Password</label><input type="password" class="form-control test" name="passwordLama"></div><br>
                            <div class="col-md-12"><label class="labels">Password Baru</label><input type="password" class="form-control test" name="passwordBaru"></div>
                            <div class=" mt-5 col-md-12"><button class="btn btn-danger profile-button" type="submit" name="change">Change</button></div>
                        </form>
                    </div>
                    <div class="p-2 py-1">
                        <div class="col-md-12 text-danger"><span>Delete Account</span></div><br>
                        <?php if ($delete == 2) { ?>
                            <div class="alert alert-danger col-md-12" role="alert" style="font-size: 13px;">
                                password salah
                            </div>
                        <?php } ?>
                        <form action="" method="POST">
                            <div class="col-md-12"><label class="labels">Password</label><input type="password" class="form-control test" name="password"></div><br>
                            <div class=" mt-2 col-md-12"><button class="btn btn-danger profile-button" type="submit" name="delete">Delete</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
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