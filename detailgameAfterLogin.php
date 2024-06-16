<!DOCTYPE html>
<html lang="zxx">

<?php 
require 'func.php';
session_start();

if (!isset($_SESSION["data"])) {
    header("Location: index.php");
    exit;
 }

if (isset($_GET['namaGame'])) {
  $nama= $_GET['namaGame'];
  $data = query("SELECT * FROM database_card where nama='$nama'");
}


$namaUser = $_SESSION["data"][0]['nama'];

$data = query("SELECT * FROM database_card1");
?>


<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Games</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/plyr.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
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
    <style>
        .section-title {
            margin-bottom: 30px;
        }

        .section-title h4,
        .section-title h5 {
            color: #ffffff;
            font-weight: 600;
            line-height: 21px;
            text-transform: uppercase;
            padding-left: 20px;
            position: relative;
            font-family: "Oswald", sans-serif;
        }

        .section-title h4:after,
        .section-title h5:after {
            position: absolute;
            left: 0;
            top: -6px;
            height: 32px;
            width: 4px;
            background: #e53637;
            content: "";
        }

        .set-bg {
            background-repeat: no-repeat;
            background-size: cover;
            background-position: top center;
        }

        .spad {
            padding-top: 100px;
            padding-bottom: 100px;
        }

        .text-white h1,
        .text-white h2,
        .text-white h3,
        .text-white h4,
        .text-white h5,
        .text-white h6,
        .text-white p,
        .text-white span,
        .text-white li,
        .text-white a {
            color: #fff;
        }

        /* buttons */

        .primary-btn {
            display: inline-block;
            font-size: 13px;
            font-weight: 700;
            text-transform: uppercase;
            color: #ffffff;
            letter-spacing: 2px;
        }

        .primary-btn span {
            font-size: 18px;
            margin-left: 5px;
            position: relative;
            top: 3px;
        }

        .site-btn {
            font-size: 13px;
            color: #ffffff;
            background: #e53637;
            font-weight: 700;
            border: none;
            border-radius: 2px;
            letter-spacing: 2px;
            text-transform: uppercase;
            display: inline-block;
            padding: 12px 30px;
        }

        /* Preloder */

        #preloder {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 999999;
            background: #000;
        }

        .loader {
            width: 40px;
            height: 40px;
            position: absolute;
            top: 50%;
            left: 50%;
            margin-top: -13px;
            margin-left: -13px;
            border-radius: 60px;
            animation: loader 0.8s linear infinite;
            -webkit-animation: loader 0.8s linear infinite;
        }

        @keyframes loader {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
                border: 4px solid #f44336;
                border-left-color: transparent;
            }

            50% {
                -webkit-transform: rotate(180deg);
                transform: rotate(180deg);
                border: 4px solid #673ab7;
                border-left-color: transparent;
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
                border: 4px solid #f44336;
                border-left-color: transparent;
            }
        }

        @-webkit-keyframes loader {
            0% {
                -webkit-transform: rotate(0deg);
                border: 4px solid #f44336;
                border-left-color: transparent;
            }

            50% {
                -webkit-transform: rotate(180deg);
                border: 4px solid #673ab7;
                border-left-color: transparent;
            }

            100% {
                -webkit-transform: rotate(360deg);
                border: 4px solid #f44336;
                border-left-color: transparent;
            }
        }

        .spacial-controls {
            position: fixed;
            width: 111px;
            height: 91px;
            top: 0;
            right: 0;
            z-index: 999;
        }

        .spacial-controls .search-switch {
            display: block;
            height: 100%;
            padding-top: 30px;
            background: #323232;
            text-align: center;
            cursor: pointer;
        }

        .search-model {
            display: none;
            position: fixed;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            background: #000;
            z-index: 99999;
        }

        .search-model-form {
            padding: 0 15px;
        }

        .search-model-form input {
            width: 500px;
            font-size: 40px;
            border: none;
            border-bottom: 2px solid #333;
            background: 0 0;
            color: #999;
        }

        .search-close-switch {
            position: absolute;
            width: 50px;
            height: 50px;
            background: #333;
            color: #fff;
            text-align: center;
            border-radius: 50%;
            font-size: 28px;
            line-height: 28px;
            top: 30px;
            cursor: pointer;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        /*---------------------
  Header
-----------------------*/

        .header {
            background: white;
        }

        .header__logo {
            padding: 20px 0 17px;
        }

        .header__logo a {
            display: inline-block;
        }

        .header__menu {
            text-align: center;
        }

        .header__menu ul li {
            list-style: none;
            display: inline-block;
            position: relative;
            margin-right: 16px;
        }

        .header__menu ul li.active a {
            background: #e53637;
            color: #ffffff;
        }

        .header__menu ul li:hover a {
            color: #ffffff;
        }

        .header__menu ul li:hover .dropdown {
            top: 62px;
            opacity: 1;
            visibility: visible;
        }

        .header__menu ul li:hover .dropdown li a {
            background: transparent;
        }

        .header__menu ul li:last-child {
            margin-right: 0;
        }

        .header__menu ul li .dropdown {
            position: absolute;
            left: 0;
            top: 82px;
            width: 150px;
            background: #ffffff;
            text-align: left;
            padding: 5px 0;
            z-index: 9;
            opacity: 0;
            visibility: hidden;
            -webkit-transition: all, 0.3s;
            -o-transition: all, 0.3s;
            transition: all, 0.3s;
        }

        .header__menu ul li .dropdown li {
            display: block;
            margin-right: 0;
        }

        .header__menu ul li .dropdown li a {
            font-size: 14px;
            color: #111111;
            font-weight: 500;
            padding: 5px 20px;
        }

        .header__menu ul li a {
            font-size: 15px;
            color: #b7b7b7;
            display: block;
            font-weight: 700;
            -webkit-transition: all, 0.5s;
            -o-transition: all, 0.5s;
            transition: all, 0.5s;
            padding: 20px;
        }

        .header__menu ul li a span {
            position: relative;
            font-size: 17px;
            top: 2px;
        }

        .header__right {
            text-align: right;
            padding: 20px 0 15px;
        }

        .header__right a {
            display: inline-block;
            font-size: 18px;
            color: #ffffff;
            margin-right: 30px;
        }

        .header__right a:last-child {
            margin-right: 0;
        }

        .slicknav_menu {
            display: none;
        }

        /*---------------------
  Hero
-----------------------*/

        .hero {
            padding-top: 50px;
        }

        .hero__items {
            padding: 250px 0 42px 50px;
            border-radius: 5px;
        }

        .hero__text {
            position: relative;
            z-index: 9;
        }

        .hero__text .label {
            font-size: 13px;
            color: #e53637;
            background: #ffffff;
            padding: 5px 14px 3px;
            display: inline-block;
            position: relative;
            top: -100px;
            opacity: 0;
            -webkit-transition: all, 0.2s;
            -o-transition: all, 0.2s;
            transition: all, 0.2s;
        }

        .hero__text h2 {
            color: #ffffff;
            font-size: 42px;
            font-family: "Oswald", sans-serif;
            font-weight: 700;
            line-height: 52px;
            margin-top: 35px;
            margin-bottom: 8px;
            position: relative;
            top: -100px;
            opacity: 0;
            -webkit-transition: all, 0.4s;
            -o-transition: all, 0.4s;
            transition: all, 0.4s;
        }

        .hero__text p {
            color: #ffffff;
            font-size: 16px;
            margin-bottom: 40px;
            position: relative;
            top: -100px;
            opacity: 0;
            -webkit-transition: all, 0.6s;
            -o-transition: all, 0.6s;
            transition: all, 0.6s;
        }

        .hero__text a {
            position: relative;
            top: -100px;
            opacity: 0;
            -webkit-transition: all, 0.8s;
            -o-transition: all, 0.8s;
            transition: all, 0.8s;
        }

        .hero__text a span {
            font-size: 13px;
            color: #ffffff;
            background: #e53637;
            display: inline-block;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            padding: 14px 20px;
            border-radius: 4px 0 0 4px;
            margin-right: 1px;
        }

        .hero__text a i {
            font-size: 20px;
            display: inline-block;
            background: #e53637;
            padding: 11px 5px 16px 8px;
            color: #ffffff;
            border-radius: 0 4px 4px 0;
        }

        .hero__slider.owl-carousel .owl-item.active .hero__text .label {
            top: 0;
            opacity: 1;
        }

        .hero__slider.owl-carousel .owl-item.active .hero__text h2 {
            top: 0;
            opacity: 1;
        }

        .hero__slider.owl-carousel .owl-item.active .hero__text p {
            top: 0;
            opacity: 1;
        }

        .hero__slider.owl-carousel .owl-item.active .hero__text a {
            top: 0;
            opacity: 1;
        }

        .hero__slider.owl-carousel .owl-dots {
            position: absolute;
            left: 0;
            bottom: 10px;
            width: 100%;
            text-align: center;
        }

        .hero__slider.owl-carousel .owl-dots button {
            height: 8px;
            width: 8px;
            background: #b7b7b7;
            border-radius: 50%;
            margin-right: 10px;
        }

        .hero__slider.owl-carousel .owl-dots button.active {
            background: #ffffff;
        }

        .hero__slider.owl-carousel .owl-dots button:last-child {
            margin-right: 0;
        }

        .hero__slider.owl-carousel .owl-nav button {
            font-size: 36px;
            height: 66px;
            width: 66px;
            background: #0b0c2a;
            line-height: 66px;
            text-align: center;
            color: #ffffff;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
            position: relative;
            z-index: 1;
            position: absolute;
            left: -33px;
            top: 50%;
            margin-top: -47px;
        }

        .hero__slider.owl-carousel .owl-nav button.owl-next {
            left: auto;
            right: -33px;
        }

        .hero__slider.owl-carousel .owl-nav button:after {
            position: absolute;
            top: 6px;
            left: 0;
            right: 0;
            height: 54px;
            width: 54px;
            background: rgba(255, 255, 255, 0.1);
            content: "";
            z-index: -1;
            margin: 0 auto;
        }

        .hero__slider.owl-carousel .owl-nav button span {
            -webkit-transform: rotate(-45deg);
            -ms-transform: rotate(-45deg);
            transform: rotate(-45deg);
            display: block;
            z-index: 1;
        }

        /*---------------------
  Product
-----------------------*/

        .product {
            padding-bottom: 60px;
            padding-top: 80px;
        }

        .product-page {
            padding-top: 60px;
        }

        .btn__all {
            text-align: right;
            margin-bottom: 30px;
        }

        .trending__product {
            margin-bottom: 50px;
        }

        .popular__product {
            margin-bottom: 50px;
        }

        .recent__product {
            margin-bottom: 50px;
        }

        .product__item {
            margin-bottom: 30px;
        }

        .product__item__pic {
            height: 325px;
            position: relative;
            border-radius: 5px;
        }

        .product__item__pic .ep {
            font-size: 13px;
            color: #ffffff;
            background: #e53637;
            display: inline-block;
            padding: 2px 12px;
            border-radius: 4px;
            position: absolute;
            left: 10px;
            top: 10px;
        }

        .product__item__pic .comment {
            font-size: 13px;
            color: #ffffff;
            background: #3d3d3d;
            display: inline-block;
            padding: 2px 10px;
            border-radius: 4px;
            position: absolute;
            left: 10px;
            bottom: 10px;
        }

        .product__item__pic .view {
            font-size: 13px;
            color: #ffffff;
            background: #3d3d3d;
            display: inline-block;
            padding: 2px 10px;
            border-radius: 4px;
            position: absolute;
            right: 10px;
            bottom: 10px;
        }

        .product__item__text {
            padding-top: 20px;
        }

        .product__item__text ul {
            margin-bottom: 10px;
        }

        .product__item__text ul li {
            list-style: none;
            font-size: 10px;
            color: #ffffff;
            font-weight: 700;
            padding: 1px 10px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50px;
            display: inline-block;
        }

        .product__item__text h5 a {
            color: #ffffff;
            font-weight: 700;
            line-height: 26px;
        }

        .product__sidebar .section-title h5 {
            color: #ffffff;
            font-weight: 600;
            font-family: "Oswald", sans-serif;
            line-height: 21px;
            text-transform: uppercase;
            padding-left: 20px;
            position: relative;
        }

        .product__sidebar .section-title h5:after {
            position: absolute;
            left: 0;
            top: -6px;
            height: 32px;
            width: 4px;
            background: #e53637;
            content: "";
        }

        .product__sidebar__view {
            position: relative;
            margin-bottom: 80px;
        }

        .product__sidebar__view .filter__controls {
            position: absolute;
            right: 0;
            top: -5px;
        }

        .product__sidebar__view .filter__controls li {
            list-style: none;
            font-size: 13px;
            color: #b7b7b7;
            display: inline-block;
            margin-right: 7px;
            cursor: pointer;
        }

        .product__sidebar__view .filter__controls li.active {
            color: #ffffff;
        }

        .product__sidebar__view .filter__controls li:last-child {
            margin-right: 0;
        }

        .product__sidebar__view__item {
            height: 190px;
            position: relative;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .product__sidebar__view__item .ep {
            font-size: 13px;
            color: #ffffff;
            background: #e53637;
            display: inline-block;
            padding: 2px 12px;
            border-radius: 4px;
            position: absolute;
            left: 10px;
            top: 10px;
        }

        .product__sidebar__view__item .view {
            font-size: 13px;
            color: #ffffff;
            background: #3d3d3d;
            display: inline-block;
            padding: 2px 10px;
            border-radius: 4px;
            position: absolute;
            right: 10px;
            top: 10px;
        }

        .product__sidebar__view__item h5 {
            position: absolute;
            left: 0;
            bottom: 25px;
            width: 100%;
            padding: 0 30px 0 20px;
        }

        .product__sidebar__view__item h5 a {
            color: #ffffff;
            font-weight: 700;
            line-height: 26px;
        }

        .product__sidebar__comment {
            margin-bottom: 35px;
        }

        .product__sidebar__comment__item {
            margin-bottom: 20px;
            overflow: hidden;
        }

        .product__sidebar__comment__item__pic {
            float: left;
            margin-right: 15px;
        }

        .product__sidebar__comment__item__text {
            overflow: hidden;
        }

        .product__sidebar__comment__item__text ul {
            margin-bottom: 10px;
        }

        .product__sidebar__comment__item__text ul li {
            list-style: none;
            font-size: 10px;
            color: #ffffff;
            font-weight: 700;
            padding: 1px 10px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50px;
            display: inline-block;
        }

        .product__sidebar__comment__item__text h5 {
            margin-bottom: 10px;
        }

        .product__sidebar__comment__item__text h5 a {
            color: #ffffff;
            font-weight: 700;
            line-height: 26px;
        }

        .product__sidebar__comment__item__text span {
            display: block;
            font-size: 13px;
            color: #b7b7b7;
        }

        .product__page__title {
            border-bottom: 2px solid rgba(255, 255, 255, 0.2);
            padding-bottom: 10px;
            margin-bottom: 30px;
        }

        .product__page__title .section-title {
            margin-bottom: 0;
        }

        .product__page__title .product__page__filter {
            text-align: right;
        }

        .product__page__title .product__page__filter p {
            color: #ffffff;
            display: inline-block;
            margin-bottom: 0;
            margin-right: 16px;
        }

        .product__page__title .product__page__filter .nice-select {
            float: none;
            display: inline-block;
            font-size: 15px;
            color: #3d3d3d;
            font-weight: 700;
            border-radius: 0;
            padding-left: 15px;
            padding-right: 40px;
            height: 32px;
            line-height: 32px;
        }

        .product__page__title .product__page__filter .nice-select:after {
            border-bottom: 2px solid #111;
            border-right: 2px solid #111;
            height: 8px;
            top: 47%;
            width: 8px;
            right: 15px;
        }

        .product__page__title .product__page__filter .nice-select .list {
            margin-top: 0;
            border-radius: 0;
        }

        .product__pagination {
            padding-top: 15px;
        }

        .product__pagination a {
            display: inline-block;
            font-size: 15px;
            color: #b7b7b7;
            font-weight: 600;
            height: 50px;
            width: 50px;
            border: 1px solid transparent;
            border-radius: 50%;
            line-height: 48px;
            text-align: center;
            -webkit-transition: all, 0.3s;
            -o-transition: all, 0.3s;
            transition: all, 0.3s;
        }

        .product__pagination a:hover {
            color: #ffffff;
        }

        .product__pagination a.current-page {
            border: 1px solid #ffffff;
        }

        .product__pagination a i {
            color: #b7b7b7;
            font-size: 15px;
        }

        /*---------------------
  Anime Details
-----------------------*/

        .anime-details {
            padding-top: 100px;
        }

        .anime__details__content {
            margin-bottom: 65px;
        }

        .anime__details__text {
            position: relative;
        }

        .anime__details__text p {
            color: #b7b7b7;
            font-size: 18px;
            line-height: 30px;
        }

        .anime__details__pic {
            height: 440px;
            border-radius: 5px;
            position: relative;
        }

        .anime__details__pic .comment {
            font-size: 13px;
            color: #ffffff;
            background: #3d3d3d;
            display: inline-block;
            padding: 2px 10px;
            border-radius: 4px;
            position: absolute;
            left: 10px;
            bottom: 25px;
        }

        .anime__details__pic .view {
            font-size: 13px;
            color: #ffffff;
            background: #3d3d3d;
            display: inline-block;
            padding: 2px 10px;
            border-radius: 4px;
            position: absolute;
            right: 10px;
            bottom: 25px;
        }

        .anime__details__title {
            margin-bottom: 20px;
        }

        .anime__details__title h3 {
            color: #ffffff;
            font-weight: 700;
            margin-bottom: 13px;
            font-size: 30px;
        }

        .anime__details__title span {
            font-size: 15px;
            color: #b7b7b7;
            display: block;
        }

        .anime__details__rating {
            text-align: center;
            position: absolute;
            right: 0;
            top: 0;
        }

        .anime__details__rating .rating i {
            font-size: 24px;
            color: #e89f12;
            display: inline-block;
        }

        .anime__details__rating span {
            display: block;
            font-size: 18px;
            color: #b7b7b7;
        }

        .anime__details__widget {
            margin-bottom: 15px;
        }

        .anime__details__widget ul {
            margin-bottom: 20px;
        }

        .anime__details__widget ul li {
            list-style: none;
            font-size: 15px;
            color: #ffffff;
            line-height: 30px;
            position: relative;
            padding-left: 18px;
        }

        .anime__details__widget ul li:before {
            position: absolute;
            left: 0;
            top: 12px;
            height: 6px;
            width: 6px;
            background: #b7b7b7;
            content: "";
        }

        .anime__details__widget ul li span {
            color: #b7b7b7;
            width: 115px;
            display: inline-block;
        }

        .anime__details__btn .follow-btn {
            font-size: 13px;
            color: #ffffff;
            background: #e53637;
            display: inline-block;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            padding: 14px 20px;
            border-radius: 4px;
            margin-right: 1px;
        }

        .anime__details__btn .watch-btn span {
            font-size: 13px;
            color: #ffffff;
            background: #e53637;
            display: inline-block;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            padding: 14px 20px;
            border-radius: 4px 0 0 4px;
            margin-right: 1px;
        }

        .anime__details__btn .watch-btn i {
            font-size: 20px;
            display: inline-block;
            background: #e53637;
            padding: 11px 5px 16px 8px;
            color: #ffffff;
            border-radius: 0 4px 4px 0;
        }

        .anime__details__review {
            margin-bottom: 55px;
        }

        .anime__review__item {
            overflow: hidden;
            margin-bottom: 15px;
        }

        .anime__review__item__pic {
            float: left;
            margin-right: 20px;
            position: relative;
        }

        .anime__review__item__pic:before {
            position: absolute;
            right: -30px;
            top: 15px;
            border-top: 15px solid transparent;
            border-left: 15px solid #1d1e39;
            content: "";
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        .anime__review__item__pic img {
            height: 50px;
            width: 50px;
            border-radius: 50%;
        }

        .anime__review__item__text {
            overflow: hidden;
            background: #1d1e39;
            padding: 18px 30px 16px 20px;
            border-radius: 10px;
        }

        .anime__review__item__text h6 {
            color: #ffffff;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .anime__review__item__text h6 span {
            color: #b7b7b7;
            font-weight: 400;
        }

        .anime__review__item__text p {
            color: #b7b7b7;
            line-height: 23px;
            margin-bottom: 0;
        }

        .anime__details__form form textarea {
            width: 100%;
            font-size: 15px;
            color: #b7b7b7;
            padding-left: 20px;
            padding-top: 12px;
            height: 110px;
            border: red 2px solid;
            border-radius: 5px;
            resize: none;
            margin-bottom: 24px;
        }

        .anime__details__form form button {
            font-size: 11px;
            color: #ffffff;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            background: #e53637;
            border: none;
            padding: 10px 15px;
            border-radius: 2px;
        }

        /*---------------------
  Anime Watching
-----------------------*/

        .anime__video__player {
            margin-bottom: 70px;
        }

        .anime__video__player .plyr--video {
            border-radius: 5px;
            background: transparent;
        }

        .anime__video__player .plyr audio,
        .anime__video__player .plyr iframe,
        .anime__video__player .plyr video {
            width: 102%;
        }

        .anime__video__player .plyr--full-ui.plyr--video .plyr__control--overlaid {
            display: block;
        }

        .anime__video__player .plyr--video .plyr__control.plyr__tab-focus,
        .anime__video__player .plyr--video .plyr__control:hover,
        .anime__video__player .plyr--video .plyr__control[aria-expanded=true] {
            background: transparent;
        }

        .anime__video__player .plyr--video .plyr__controls {
            background: transparent;
        }

        .anime__video__player .plyr--video .plyr__progress__buffer {
            color: transparent;
        }

        .anime__video__player .plyr--full-ui input[type=range] {
            color: #ffffff;
        }

        .anime__video__player .plyr__controls .plyr__controls__item.plyr__progress__container {
            position: absolute;
            left: 26px;
            bottom: 45px;
            width: calc(100% - 60px);
        }

        .anime__video__player .plyr__menu {
            margin-right: 70px;
        }

        .anime__video__player .plyr__controls .plyr__controls__item:first-child {
            position: absolute;
            left: 32px;
            bottom: 8px;
        }

        .anime__video__player .plyr__controls .plyr__controls__item:last-child {
            position: absolute;
            right: 32px;
            bottom: 8px;
        }

        .anime__video__player .plyr__volume {
            position: absolute;
            width: auto;
            left: 76px;
            bottom: 8px;
        }

        .anime__video__player .plyr__controls .plyr__controls__item.plyr__time {
            position: absolute;
            left: 106px;
            bottom: 12px;
        }

        .anime__video__player .plyr__control--overlaid {
            background: transparent;
            background: var(--plyr-video-control-background-hover, var(--plyr-color-main, var(--plyr-color-main, transparent)));
        }

        .anime__video__player .plyr__control--overlaid svg {
            height: 60px;
            width: 50px;
        }

        .anime__details__episodes {
            margin-bottom: 35px;
        }

        .anime__details__episodes a {
            display: inline-block;
            font-size: 15px;
            color: #ffffff;
            background: rgba(255, 255, 255, 0.2);
            padding: 10px 20px;
            border-radius: 4px;
            margin-right: 15px;
            margin-bottom: 20px;
            -webkit-transition: all, 0.3s;
            -o-transition: all, 0.3s;
            transition: all, 0.3s;
        }

        .anime__details__episodes a:hover {
            color: #000000;
            background: #ffffff;
        }

        /*---------------------
  Breadcrumb
-----------------------*/

        .breadcrumb-option {
            padding-top: 35px;
        }

        .breadcrumb__links a {
            font-size: 15px;
            color: #ffffff;
            margin-right: 18px;
            display: inline-block;
            position: relative;
        }

        .breadcrumb__links a i {
            margin-right: 5px;
            color: #e53637;
        }

        .breadcrumb__links a:after {
            position: absolute;
            right: -14px;
            top: 0;
            content: "";
            font-family: "FontAwesome";
        }

        .breadcrumb__links span {
            font-size: 15px;
            color: #b7b7b7;
            display: inline-block;
        }

        /*---------------------
    Normal Breadcrumb
-----------------------*/

        .normal-breadcrumb {
            height: 300px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .normal__breadcrumb__text h2 {
            color: #ffffff;
            font-size: 48px;
            font-family: "Oswald", sans-serif;
            font-weight: 700;
            margin-bottom: 22px;
        }

        .normal__breadcrumb__text p {
            color: #ffffff;
            font-size: 24px;
            margin-bottom: 0;
        }

        /*---------------------
    Blog
-----------------------*/

        .blog {
            padding-top: 70px;
            padding-bottom: 90px;
        }

        .blog__item {
            height: 580px;
            position: relative;
            margin-left: -10px;
            margin-right: -10px;
            margin-bottom: 10px;
        }

        .blog__item.small__item {
            height: 285px;
        }

        .blog__item.small__item .blog__item__text {
            padding: 0 30px;
        }

        .blog__item.small__item .blog__item__text p {
            margin-bottom: 5px;
        }

        .blog__item.small__item .blog__item__text h4 a {
            font-size: 20px;
            line-height: 30px;
        }

        .blog__item__text {
            position: absolute;
            left: 0;
            bottom: 25px;
            text-align: center;
            width: 100%;
            padding: 0 105px;
        }

        .blog__item__text p {
            color: #ffffff;
            margin-bottom: 12px;
        }

        .blog__item__text p span {
            color: #e53637;
            margin-right: 5px;
        }

        .blog__item__text h4 a {
            color: #ffffff;
            line-height: 34px;
        }

        /*---------------------
  Blog Details
-----------------------*/

        .blog-details {
            padding-top: 70px;
        }

        .blog__details__title {
            text-align: center;
            margin-bottom: 70px;
        }

        .blog__details__title h6 {
            font-size: 15px;
            color: #ffffff;
            font-weight: 700;
            text-transform: uppercase;
            margin-bottom: 30px;
        }

        .blog__details__title h6 span {
            color: #b7b7b7;
            font-weight: 400;
            text-transform: none;
        }

        .blog__details__title h2 {
            color: #ffffff;
            font-size: 48px;
            font-weight: 700;
            line-height: 60px;
            margin-bottom: 38px;
        }

        .blog__details__title .blog__details__social a {
            display: inline-block;
            font-size: 15px;
            color: #ffffff;
            padding: 16px 35px 14px 20px;
            border-radius: 2px;
            margin-right: 6px;
        }

        .blog__details__title .blog__details__social a:last-child {
            margin-right: 0;
        }

        .blog__details__title .blog__details__social a.facebook {
            background: #3b5998;
        }

        .blog__details__title .blog__details__social a.pinterest {
            background: #ca2027;
        }

        .blog__details__title .blog__details__social a.linkedin {
            background: #0372b1;
        }

        .blog__details__title .blog__details__social a.twitter {
            background: #39a1f2;
        }

        .blog__details__title .blog__details__social a i {
            margin-right: 6px;
        }

        .blog__details__pic {
            margin-bottom: 30px;
        }

        .blog__details__pic img {
            min-width: 100%;
        }

        .blog__details__text {
            margin-bottom: 40px;
        }

        .blog__details__text p {
            color: #ffffff;
            font-size: 17px;
            line-height: 30px;
        }

        .blog__details__item__text {
            margin-bottom: 42px;
        }

        .blog__details__item__text h4 {
            color: #ffffff;
            font-weight: 700;
            margin-bottom: 35px;
        }

        .blog__details__item__text img {
            min-width: 100%;
            margin-bottom: 26px;
        }

        .blog__details__item__text p {
            color: #ffffff;
            font-size: 17px;
            line-height: 30px;
            margin-bottom: 0;
        }

        .blog__details__tags {
            margin-bottom: 60px;
        }

        .blog__details__tags a {
            display: inline-block;
            color: #b7b7b7;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 2px;
            margin-right: 6px;
            padding: 6px 15px;
            margin-bottom: 10px;
        }

        .blog__details__tags a:last-child {
            margin-right: 0;
        }

        .blog__details__btns {
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            padding: 20px 0 15px;
            margin-bottom: 65px;
        }

        .blog__details__btns__item {
            margin-bottom: 20px;
        }

        .blog__details__btns__item.next__btn {
            text-align: right;
        }

        .blog__details__btns__item h5 a {
            font-size: 17px;
            letter-spacing: 2px;
            color: #ffffff;
        }

        .blog__details__btns__item h5 a span {
            font-size: 30px;
            color: #b7b7b7;
            position: relative;
            top: 8px;
        }

        .blog__details__comment {
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            padding-bottom: 30px;
        }

        .blog__details__comment h4 {
            color: #ffffff;
            font-weight: 700;
            margin-bottom: 26px;
        }

        .blog__details__comment__item {
            margin-bottom: 40px;
            overflow: hidden;
        }

        .blog__details__comment__item.blog__details__comment__item--reply {
            padding-left: 112px;
        }

        .blog__details__comment__item__pic {
            float: left;
            margin-right: 40px;
        }

        .blog__details__comment__item__text {
            overflow: hidden;
        }

        .blog__details__comment__item__text span {
            font-size: 14px;
            color: #b7b7b7;
            display: block;
            margin-bottom: 10px;
        }

        .blog__details__comment__item__text h5 {
            color: #ffffff;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .blog__details__comment__item__text p {
            color: #b7b7b7;
            font-size: 14px;
            line-height: 22px;
            margin-bottom: 25px;
        }

        .blog__details__comment__item__text a {
            display: inline-block;
            color: #ffffff;
            background: rgba(255, 255, 255, 0.1);
            padding: 6px 20px;
            letter-spacing: 2px;
            border-radius: 2px;
            margin-right: 14px;
            -webkit-transition: all, 0.3s;
            -o-transition: all, 0.3s;
            transition: all, 0.3s;
        }

        .blog__details__comment__item__text a:hover {
            background: #e53637;
        }

        .blog__details__form {
            padding-top: 50px;
        }

        .blog__details__form h4 {
            color: #ffffff;
            font-weight: 700;
            margin-bottom: 26px;
        }

        .blog__details__form form input {
            height: 50px;
            width: 100%;
            background: #ffffff;
            font-size: 15px;
            color: #a6a6a6;
            padding-left: 20px;
            border-radius: 2px;
            border: none;
            margin-bottom: 30px;
        }

        .blog__details__form form input::-webkit-input-placeholder {
            color: #a6a6a6;
        }

        .blog__details__form form input::-moz-placeholder {
            color: #a6a6a6;
        }

        .blog__details__form form input:-ms-input-placeholder {
            color: #a6a6a6;
        }

        .blog__details__form form input::-ms-input-placeholder {
            color: #a6a6a6;
        }

        .blog__details__form form input::placeholder {
            color: #a6a6a6;
        }

        .blog__details__form form textarea {
            height: 115px;
            width: 100%;
            background: #ffffff;
            font-size: 15px;
            color: #a6a6a6;
            padding-left: 20px;
            border-radius: 2px;
            padding-top: 12px;
            resize: none;
            border: none;
            margin-bottom: 34px;
        }

        .blog__details__form form textarea::-webkit-input-placeholder {
            color: #a6a6a6;
        }

        .blog__details__form form textarea::-moz-placeholder {
            color: #a6a6a6;
        }

        .blog__details__form form textarea:-ms-input-placeholder {
            color: #a6a6a6;
        }

        .blog__details__form form textarea::-ms-input-placeholder {
            color: #a6a6a6;
        }

        .blog__details__form form textarea::placeholder {
            color: #a6a6a6;
        }

        /*---------------------
  Login
-----------------------*/

        .login {
            padding-top: 130px;
            padding-bottom: 120px;
        }

        .login__form {
            position: relative;
            padding-left: 145px;
        }

        .login__form:after {
            position: absolute;
            right: -14px;
            top: -40px;
            height: 330px;
            width: 1px;
            background: rgba(255, 255, 255, 0.2);
            content: "";
        }

        .login__form h3 {
            color: #ffffff;
            font-weight: 700;
            font-family: "Oswald", sans-serif;
            margin-bottom: 30px;
        }

        .login__form form .input__item {
            position: relative;
            width: 370px;
            margin-bottom: 20px;
        }

        .login__form form .input__item:before {
            position: absolute;
            left: 50px;
            top: 10px;
            height: 30px;
            width: 1px;
            background: #b7b7b7;
            content: "";
        }

        .login__form form .input__item input {
            height: 50px;
            width: 100%;
            font-size: 15px;
            color: #b7b7b7;
            background: #ffffff;
            border: none;
            padding-left: 76px;
        }

        .login__form form .input__item input::-webkit-input-placeholder {
            color: #b7b7b7;
        }

        .login__form form .input__item input::-moz-placeholder {
            color: #b7b7b7;
        }

        .login__form form .input__item input:-ms-input-placeholder {
            color: #b7b7b7;
        }

        .login__form form .input__item input::-ms-input-placeholder {
            color: #b7b7b7;
        }

        .login__form form .input__item input::placeholder {
            color: #b7b7b7;
        }

        .login__form form .input__item span {
            color: #b7b7b7;
            font-size: 20px;
            position: absolute;
            left: 15px;
            top: 13px;
        }

        .login__form form button {
            border-radius: 0;
            margin-top: 10px;
        }

        .login__form .forget_pass {
            font-size: 15px;
            color: #ffffff;
            display: inline-block;
            position: absolute;
            right: 60px;
            bottom: 12px;
        }

        .login__register {
            padding-left: 30px;
        }

        .login__register h3 {
            color: #ffffff;
            font-weight: 700;
            font-family: "Oswald", sans-serif;
            margin-bottom: 30px;
        }

        .login__register .primary-btn {
            background: #e53637;
            padding: 12px 42px;
        }

        .login__social {
            padding-top: 52px;
        }

        .login__social__links {
            text-align: center;
        }

        .login__social__links span {
            color: #ffffff;
            display: block;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 30px;
        }

        .login__social__links ul li {
            list-style: none;
            margin-bottom: 15px;
        }

        .login__social__links ul li:last-child {
            margin-bottom: 0;
        }

        .login__social__links ul li a {
            color: #ffffff;
            display: block;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            width: 460px;
            padding: 14px 0;
            position: relative;
            margin: 0 auto;
        }

        .login__social__links ul li a.facebook {
            background: #4267b2;
        }

        .login__social__links ul li a.google {
            background: #ff4343;
        }

        .login__social__links ul li a.twitter {
            background: #1da1f2;
        }

        .login__social__links ul li a i {
            font-size: 20px;
            position: absolute;
            left: 32px;
            top: 14px;
        }

        /*---------------------
  Sign Up
-----------------------*/

        .signup {
            padding-top: 130px;
            padding-bottom: 150px;
        }

        .signup .login__form:after {
            height: 450px;
        }

        .signup .login__form h5 {
            font-size: 15px;
            color: #ffffff;
            margin-top: 36px;
        }

        .signup .login__form h5 a {
            color: #e53637;
            font-weight: 700;
        }

        .signup .login__social__links {
            text-align: left;
            padding-left: 40px;
        }

        .signup .login__social__links h3 {
            color: #ffffff;
            font-weight: 700;
            font-family: "Oswald", sans-serif;
            margin-bottom: 30px;
        }

        .signup .login__social__links ul li a {
            margin: 0;
            text-align: center;
        }

        /*---------------------
  Footer
-----------------------*/

        .footer {
            background: #070720;
            padding-top: 60px;
            padding-bottom: 40px;
            position: relative;
        }

        .page-up {
            position: absolute;
            left: 50%;
            top: -25px;
            margin-left: -25px;
        }

        .page-up a {
            display: inline-block;
            font-size: 36px;
            color: #ffffff;
            height: 50px;
            width: 50px;
            background: #e53637;
            line-height: 50px;
            text-align: center;
            border-radius: 50%;
        }

        .page-up a span {
            position: relative;
            top: 2px;
            left: -1px;
        }

        .footer__nav {
            text-align: center;
        }

        .footer__nav ul li {
            list-style: none;
            display: inline-block;
            position: relative;
            margin-right: 40px;
        }

        .footer__nav ul li:last-child {
            margin-right: 0;
        }

        .footer__nav ul li a {
            font-size: 15px;
            color: #b7b7b7;
            display: block;
            font-weight: 700;
        }

        .footer__copyright__text {
            color: #b7b7b7;
            margin-bottom: 0;
            text-align: right;
        }

        .footer__copyright__text a {
            color: #e53637;
        }

        /*--------------------------------- Responsive Media Quaries -----------------------------*/

        @media only screen and (min-width: 1200px) and (max-width: 1300px) {
            .hero {
                overflow: hidden;
            }
        }

        @media only screen and (min-width: 1200px) {
            .container {
                max-width: 1170px;
            }
        }

        /* Medium Device = 1200px */

        @media only screen and (min-width: 992px) and (max-width: 1199px) {
            .hero {
                overflow: hidden;
            }

            .login__form {
                position: relative;
                padding-left: 32px;
            }

            .login__social__links ul li a {
                width: 380px;
            }

            .blog__item__text {
                padding: 0 50px;
            }
        }

        /* Tablet Device = 768px */

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .hero {
                overflow: hidden;
            }

            .header {
                position: relative;
            }

            .header .container {
                position: relative;
            }

            .header__right {
                position: absolute;
                right: 120px;
                top: -42px;
                padding: 0;
            }

            .header__menu {
                display: none;
            }

            .slicknav_menu {
                background: transparent;
                padding: 0;
                display: block;
            }

            .slicknav_nav {
                position: absolute;
                left: 0;
                top: 60px;
                width: 100%;
                background: #ffffff;
                padding: 15px 30px;
                z-index: 9;
            }

            .slicknav_nav ul {
                margin: 0;
            }

            .slicknav_nav .slicknav_row,
            .slicknav_nav a {
                padding: 7px 0;
                margin: 0;
                color: #111111;
                font-weight: 600;
            }

            .slicknav_btn {
                border-radius: 0;
                background-color: #222;
                position: absolute;
                right: 0;
                top: 9px;
            }

            .slicknav_nav .slicknav_arrow {
                color: #111111;
            }

            .slicknav_nav .slicknav_row:hover {
                border-radius: 0;
                background: transparent;
                color: #111111;
            }

            .slicknav_nav a:hover {
                border-radius: 0;
                background: transparent;
                color: #111111;
            }

            .product__sidebar {
                padding-top: 50px;
            }

            .footer__logo {
                text-align: center;
                margin-bottom: 20px;
            }

            .footer__nav {
                margin-bottom: 15px;
            }

            .footer__copyright__text {
                text-align: center;
            }

            .anime__details__widget ul li span {
                width: 90px;
            }

            .anime__details__pic {
                margin-bottom: 40px;
            }

            .anime__details__sidebar {
                padding-top: 50px;
            }

            .login__form {
                padding-left: 0;
                margin-bottom: 40px;
            }

            .login__form:after {
                display: none;
            }

            .login__form form .input__item {
                width: auto;
            }

            .login__register {
                padding-left: 0;
            }

            .signup .login__social__links {
                padding-left: 0;
            }
        }

        /* Wide Mobile = 480px */

        @media only screen and (max-width: 767px) {
            .hero {
                overflow: hidden;
            }

            .header {
                position: relative;
            }

            .header .container {
                position: relative;
            }

            .header__right {
                position: absolute;
                right: 120px;
                top: -42px;
                padding: 0;
            }

            .header__menu {
                display: none;
            }

            .slicknav_menu {
                background: transparent;
                padding: 0;
                display: block;
            }

            .slicknav_nav {
                position: absolute;
                left: 0;
                top: 60px;
                width: 100%;
                background: #ffffff;
                padding: 15px 30px;
                z-index: 9;
            }

            .slicknav_nav ul {
                margin: 0;
            }

            .slicknav_nav .slicknav_row,
            .slicknav_nav a {
                padding: 7px 0;
                margin: 0;
                color: #111111;
                font-weight: 600;
            }

            .slicknav_btn {
                border-radius: 0;
                background-color: #222;
                position: absolute;
                right: 0;
                top: 9px;
            }

            .slicknav_nav .slicknav_arrow {
                color: #111111;
            }

            .slicknav_nav .slicknav_row:hover {
                border-radius: 0;
                background: transparent;
                color: #111111;
            }

            .slicknav_nav a:hover {
                border-radius: 0;
                background: transparent;
                color: #111111;
            }

            .product__sidebar {
                padding-top: 50px;
            }

            .footer__logo {
                text-align: center;
                margin-bottom: 20px;
            }

            .footer__nav {
                margin-bottom: 15px;
            }

            .footer__copyright__text {
                text-align: center;
            }

            .blog__details__title h2 {
                font-size: 34px;
                line-height: normal;
            }

            .anime__details__pic {
                margin-bottom: 40px;
            }

            .anime__details__sidebar {
                padding-top: 50px;
            }

            .btn__all {
                text-align: left;
            }

            .product__page__title .section-title {
                margin-bottom: 30px;
            }

            .product__page__title .product__page__filter {
                text-align: left;
            }

            .anime__details__rating {
                text-align: left;
                position: relative;
                margin-bottom: 20px;
            }

            .blog__details__social {
                overflow: hidden;
            }

            .blog__details__title .blog__details__social a {
                margin-right: 10px;
                margin-bottom: 10px;
                width: calc(50% - 10px);
                float: left;
            }

            .login__form {
                padding-left: 0;
                margin-bottom: 40px;
            }

            .login__form:after {
                display: none;
            }

            .login__form form .input__item {
                width: auto;
            }

            .signup .login__social__links {
                padding-left: 0;
            }

            .login__social__links ul li a {
                width: auto;
            }

            .blog__item__text {
                padding: 0 30px;
            }

            .login__register {
                padding-left: 0;
            }

            .product__sidebar__view .filter__controls li {
                margin-right: 2px;
            }

            .search-model-form input {
                width: 100%;
            }
        }

        /* Small Device = 320px */

        @media only screen and (max-width: 479px) {
            .hero__slider.owl-carousel .owl-nav {
                display: none;
            }

            .hero__items {
                padding: 250px 0 42px 15px;
            }

            .hero__text h2 {
                font-size: 32px;
            }

            .footer__nav ul li {
                margin-right: 10px;
            }

            .anime__details__btn .follow-btn {
                padding: 14px 26px;
                margin-right: 11px;
                margin-bottom: 25px;
            }

            .anime__details__widget ul li span {
                width: 85px;
            }

            .anime__video__player .plyr__volume {
                left: 65px;
            }

            .anime__video__player .plyr__controls .plyr__controls__item.plyr__time {
                left: 95px;
            }

            .anime__video__player .plyr__menu {
                margin-right: 60px;
            }

            .blog__details__title h2 {
                font-size: 30px;
                line-height: normal;
            }

            .blog__details__title .blog__details__social a {
                padding: 16px 25px 14px 20px;
            }

            .blog__details__comment__item.blog__details__comment__item--reply {
                padding-left: 0;
            }

            .blog__details__comment__item__pic {
                margin-right: 25px;
            }

            .blog__details__comment__item__text a {
                margin-right: 6px;
            }

            .login__social__links ul li a i {
                left: 20px;
            }

            .login__form .forget_pass {
                position: relative;
                left: 0;
                bottom: 0;
                margin-top: 25px;
            }

            .header__right a {
                margin-right: 10px;
            }

            .anime__review__item__text h6 span {
                font-size: 12px;
            }

            .anime__review__item__text {
                padding: 18px 20px 20px;
            }
        }
    </style>
</head>


<body style="background-color: black;">


    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="Library.php"><i class="fa fa-home"></i>Library</a>
                        <span>Detail</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    <!-- Anime Section Begin -->
    <section class="anime-details spad">
        <div class="container">
            <div class="anime__details__content">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="anime__details__pic">
                            <img src="images/<?php echo $data[0]['image_resize'] ?>"alt="" style="border-radius: 10px;">
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="anime__details__text">
                            <div class="anime__details__title">
                                <h3><?php echo $data[0]['nama'] ?></h3>
                                <span><?php echo $data[0]['Kategori'] ?></span>
                            </div>
                            <div class="anime__details__rating">
                                <div class="rating">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star-half-o"></i></a>
                                </div>
                                <span>1.029 Votes</span>
                            </div>
                            <p><?php echo $data[0]['keterangan'] ?></p>
                            <div class="anime__details__widget">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <p>Minimum Requirement</p>
                                        <ul>
                                            <li><span>CPU:</span> Intel Core i5</li>
                                            <li><span>GPU:</span> Nvidia GTX 1060 4Gb</li>
                                            <li><span>RAM:</span> 8Gb</li>
                                            <li><span>Windows:</span> 10/11</li>
                                            <li><span>Free Size:</span> 50Gb</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <p>Recommended Requirement</p>
                                        <ul>
                                            <li><span>CPU:</span> Intel Core i5</li>
                                            <li><span>GPU:</span> Nvidia GTX 1060 4Gb</li>
                                            <li><span>RAM:</span> 8Gb</li>
                                            <li><span>Windows:</span> 10/11</li>
                                            <li><span>Free Size:</span> 50Gb</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="anime__details__btn">
                                <a href="#" class="watch-btn"><span>Play Now</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="anime__details__review">
                        <div class="section-title">
                            <h5>Reviews</h5>
                        </div>
                        <div class="anime__review__item">
                            <div class="anime__review__item__pic">
                                <img src="images/portrait-asian-teen-boy.jpg" alt="">
                            </div>
                            <div class="anime__review__item__text">
                                <h6>Chris Curry - <span>1 Hour ago</span></h6>
                                <p>whachikan Just noticed that someone categorized this as belonging to the genre
                                    "demons" LOL</p>
                            </div>
                        </div>
                        <div class="anime__review__item">
                            <div class="anime__review__item__pic">
                                <img src="images/portrait-asian-teen-boy.jpg" alt="">
                            </div>
                            <div class="anime__review__item__text">
                                <h6>Lewis Mann - <span>5 Hour ago</span></h6>
                                <p>Finally it came out ages ago</p>
                            </div>
                        </div>
                        <div class="anime__review__item">
                            <div class="anime__review__item__pic">
                                <img src="images/portrait-asian-teen-boy.jpg" alt="">
                            </div>
                            <div class="anime__review__item__text">
                                <h6>Louis Tyler - <span>20 Hour ago</span></h6>
                                <p>Where is the episode 15 ? Slow update! Tch</p>
                            </div>
                        </div>
                        <div class="anime__review__item">
                            <div class="anime__review__item__pic">
                                <img src="images/portrait-asian-teen-boy.jpg" alt="">
                            </div>
                            <div class="anime__review__item__text">
                                <h6>Chris Curry - <span>1 Hour ago</span></h6>
                                <p>whachikan Just noticed that someone categorized this as belonging to the genre
                                    "demons" LOL</p>
                            </div>
                        </div>
                        <div class="anime__review__item">
                            <div class="anime__review__item__pic">
                                <img src="images/portrait-asian-teen-boy.jpg" alt="">
                            </div>
                            <div class="anime__review__item__text">
                                <h6>Lewis Mann - <span>5 Hour ago</span></h6>
                                <p>Finally it came out ages ago</p>
                            </div>
                        </div>
                        <div class="anime__review__item">
                            <div class="anime__review__item__pic">
                                <img src="images/portrait-asian-teen-boy.jpg" alt="">
                            </div>
                            <div class="anime__review__item__text">
                                <h6>Louis Tyler - <span>20 Hour ago</span></h6>
                                <p>Where is the episode 15 ? Slow update! Tch</p>
                            </div>
                        </div>
                    </div>
                    <div class="anime__details__form">
                        <div class="section-title">
                            <h5>Your Comment</h5>
                        </div>
                        <form action="#">
                            <textarea placeholder="Your Comment"></textarea>
                            <button type="submit"><i class="fa fa-location-arrow"></i> Review</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="anime__details__sidebar">
                        <div class="section-title">
                            <h5>you might like...</h5>
                        </div>
                        <div class="product__sidebar__view__item set-bg" data-setbg="images/tv-1.jpg">
                            <img src="images/tv-1.jpg" alt="">
                            <div class="ep">18 / ?</div>
                            <div class="view"><i class="fa fa-eye"></i> 9141</div>
                            <h5><a href="#">Boruto: Naruto next generations</a></h5>
                        </div>
                        <div class="product__sidebar__view__item set-bg">
                            <img src="images/Dead Island.png" alt="">
                            <div class="ep">18 / ?</div>
                            <div class="view"><i class="fa fa-eye"></i> 9141</div>
                            <h5><a href="#">Dead Island</a></h5>
                        </div>
                        <div class="product__sidebar__view__item set-bg">
                            <img src="images/jedi.jpg" alt="">
                            <div class="ep">18 / ?</div>
                            <div class="view"><i class="fa fa-eye"></i> 9141</div>
                            <h5><a href="#">Starwars Jedi Survivor</a></h5>
                        </div>
                        <div class="product__sidebar__view__item set-bg" data-setbg="img/sidebar/tv-4.jpg">
                            <img src="images/home.png" alt="">
                            <div class="ep">18 / ?</div>
                            <div class="view"><i class="fa fa-eye"></i> 9141</div>
                            <h5><a href="#">Cyberpunk 2077</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Anime Section End -->

    <!-- Footer Section Begin -->
    <footer class="bg-dark mt-5">
      <div class="container ">

         <div class="row">
            <div class="col-md-12">
               <p class="text-light mt-5 text-center">&copy; 2023 SIJAGO. All rights reserved.</p>
            </div>
         </div>
      </div>
   </footer>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/player.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>