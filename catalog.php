<!DOCTYPE html>
<html lang="zxx">
<?php
include "db.php";

$qr_result = mysql_query("SELECT * FROM `$db_name`.`ware`   WHERE `img`='" . $_GET['img'] . "' ORDER BY id DESC") or die(mysql_error());

 
//    while ($data = mysql_fetch_array($qr_result)) {
//
//    }
//            $qwery = mysql_query('SELECT * FROM `$db_name`.`ware` WHERE `img` = ''') or die(mysql_error());
////            $mass = mysql_fetch_array($qwery);
//            do{
//                $id =$mass['directory'];
//                $sql_del = mysql_query("SELECT * FROM `$db_name`.`ware` WHERE `img` = '$id'");
//                $mass1 = mysql_fetch_array($sql_del);
//                printf ('
//							<div class="col-sm-6 col-md-4 col-lg-3">
//								<!-- Product item -->
//								<div class="product-item hover-img" style="height:350px">
//									<a href="php" class="product-img">
//										<img src="images/images/%s/%s.jpg" alt="image" style="height:180px">
//									</a>
//									<div class="product-caption">
//										<h4 style="height: 50px" class="product-name">
//											<a href="#">%s</a>
//										</h4>
//										<div class="product-price-group">
//											<span class="product-price">от %s рублей</span>
//										</div>
//									</div>
//									<!--<div class="absolute-caption">
//										<a href="#"><i class="fa fa-heart-o"></i></a>
//										<a href="#"><i class="fa fa-exchange"></i></a>
//										<a href="#"><i class="fa fa-cart-plus"></i></a>
//									</div>-->
//								</div>
//							</div>'
//                    ,$mass1['img'],$mass1['img_name'],$mass['name'],$mass1['price']);
//            }while ($mass = mysql_fetch_array($qwery));
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Каталог</title>
    <link rel="icon" href="favicon.ico">
    <!-- JqueryUI -->
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- Awesome font icons -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="screen">
    <!-- Owlcoursel -->
    <link rel="stylesheet" type="text/css" href="css/owl-coursel/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/owl-coursel/owl.transitions.css">
    <!-- Magnific-popup -->
    <link rel="stylesheet" type="text/css" href="css/magnific-popup/magnific-popup.css">
    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
    <!-- Fw -->
    <link rel="stylesheet" type="text/css" href="css/fw.css" media="screen">
</head>
<body class="bg-white">
<div class="preloader">
    <i class="fa fa-spinner"></i>
</div>
<header>
    <div class="container">
        <!-- Top menu -->
        <div class="row m-t-15">
            <div class="col-sm-2 col-md-4 hidden-xs">
                <div class="cloud-3"></div>
            </div>
            <div class="col-sm-4 col-md-3">

            </div>

        </div>
        <!--<div class="cart dropdown">
            <a href="#" class="cart-item dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span>2</span><i class="fa fa-cart-plus"></i>
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <li>
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object" src="images/sp1.jpg" width="50" alt="...">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="product-name">Lorem ipsum dolor</h4>
                            <p>$15.0<span> x 3</span> <i class="fa fa-remove"></i></p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object" src="images/sp2.jpg" width="50" alt="...">
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="product-name">Lorem ipsum dolor</h4>
                            <p>$15.0<span> x 3</span> <i class="fa fa-remove"></i></p>
                        </div>
                    </div>
                </li>
                <li class="table-div">
                    <ul class="table-content">
                        <li class="row m-0">
                            <div class="col col-xs-6">
                                <strong>Sub-Total:</strong>
                            </div>
                            <div class="col col-xs-6">
                                $300.00
                            </div>
                        </li>
                        <li class="row m-0">
                            <div class="col col-xs-6">
                                <strong>Ship:</strong>
                            </div>
                            <div class="col col-xs-6">
                                $0.00
                            </div>
                        </li>
                        <li class="row m-0">
                            <div class="col col-xs-6">
                                <strong>VAT (20%):</strong>
                            </div>
                            <div class="col col-xs-6">
                                $60.00
                            </div>
                        </li>
                        <li class="row m-0">
                            <div class="col col-xs-6">
                                <strong>Total:</strong>
                            </div>
                            <div class="col col-xs-6 color-3 f-bold">
                                $240.00
                            </div>
                        </li>
                    </ul>
                </li>
                <li>
                    <p>
                        <a href="#" class="btn ht-btn bg-3">Checkout</a>
                        <a href="#" class="btn ht-btn bg-7">Cart</a>
                    </p>
                </li>
            </ul>
        </div>-->
        <div class="row">
            <div class="col-sm-12 col-md-2">
                <!-- Logo -->
                <a href="#" class="logo">
                    <img src="images/logo.png" alt="logo">
                </a>
            </div>
            <div class="col-sm-12 col-md-10">
                <!-- Menu -->
                <div class="main-menu">
                    <nav class="navbar navbar-default menu">
                        <div class="container-fluid p-0">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Lorem ipsum dolor</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="collapse navbar-collapse p-0" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav pull-right m-r-40 m-r-sm-0 m-r-xs-0">
                                    <li class="active">
                                        <a href="index.php">Главная</a>
                                    </li>
                                    <li><a href="about.htm">О нас</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Каталог</a>
                                        <ul class="dropdown-menu">

										 <?  $qwery = mysql_query('SELECT * FROM catalog') or die(mysql_error());
											$mass = mysql_fetch_array($qwery);
										 do{
											
											printf ('
												<li><a href="catalog.php?img=%s">%s</a></li>
													'
												,$mass['directory'],$mass['name']);
										}while ($mass = mysql_fetch_array($qwery));
										?>
										
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blogs & Events</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="blog_1.htm">Blog 1 col</a></li>
                                            <li><a href="blog_2.htm">Blog 2 col</a></li>
                                            <li><a href="blog_3.htm">Blog 3 col</a></li>
                                            <li><a href="blog_4.htm">Blog left sidebar</a></li>
                                            <li><a href="blog_detail.htm">Blog detail</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="error_404.htm">Error_404</a></li>
                                            <li><a href="login.htm">Login</a></li>
                                            <li><a href="register.htm">Register</a></li>
                                            <li><a href="contact.htm">Contact us</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Sideshow -->
<div class="sideshow">
    <div class="container text-center">
        <div class="owl m-b-60" data-items="4" data-itemsDesktop="3" data-itemsDesktopSmall="2" data-itemsTablet="2"
             data-itemsMobile="1" data-transitionstyle="fade" data-singleItem="true" data-autoplay="true"
             data-pag="false" data-buttons="false">
            <img src="images/banner-1.png" alt="image">
            <img src="images/banner-2.png" alt="image">
            <img src="images/banner-3.png" alt="image">
        </div>
        <div class="cloud-0 pull-left"></div>
        <div class="cloud-3 pull-left"></div>
        <div class="cloud-1 pull-right"></div>
        <div class="cloud-2 pull-right"></div>
    </div>
</div>
<div class="top-pie"></div>
<!-- Introducation
<section class="text-center">
    <div class="container">
        <h2 class="title p-b-10">Introducation BabyStore</h2>
        <p class="max-w p-15 p-t-0">Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor Lorem ipsum dolor sit amet consectetur adipisicing elit sed cidunt ut labore et dolore magna aliqua uat veniama Lorem ipsum dolor sit amet consectetur adipisicing elit sed cidunt ut labore et dolore magna aliqua uat veniama </p>
        <a href="#" class="btn ht-btn ht-btn-2x bg-3 m-t-20 color-f">Read more</a>
    </div>
</section>
 -->
<!-- Banner
<section class="color-inher text-center">
    <div class="container">
        <img src="images/group-toys.png" class="w-80" alt="image">
        <div class="banner banner-2x bg-img-3 bg-4 text-left bor-rand-15 no-bg-img-xs">
            <div class="caption">
                <h1 class="heading-size-2 f-bold">Gifts for Kids</h1>
                <h3 class="heading-size-4 color-tran">Vouchers $35 + FREE SHIPPING</h3>
                <h4 class="heading-size-6">Get 25% off YOUR FIRST ORDER</h4>
                <a href="#" class="btn ht-btn ht-btn-2x m-t-15">Shop now</a>
            </div>
        </div>
    </div>
</section>
 -->
<!-- Product -->
<section>
    <div class="container">
        <h3 class="title text-center m-b-20">Каталог</h3>
        <div class="row product-1 product-bor">
<?
if (mysql_num_rows($qr_result) > 0) {
    while ($data = mysql_fetch_array($qr_result)) {
        printf ('
							<div class="col-sm-6 col-md-4 col-lg-3">
								<!-- Product item -->
								<div class="product-item hover-img" style="height:350px">
									<a href="product.php?id=%s" class="product-img">
										<img src="images/images/%s/%s.jpg" alt="image" style="height:180px">
									</a>
									<div class="product-caption">
										<h4 style="height: 50px" class="product-name">
											<a href="catalog.php?img=%s">%s</a>
										</h4>
										<div class="product-price-group">
										<br>
											<span class="product-price">от %s рублей</span>
										</div>
									</div>
									<!--<div class="absolute-caption">
										<a href="#"><i class="fa fa-heart-o"></i></a>
										<a href="#"><i class="fa fa-exchange"></i></a>
										<a href="#"><i class="fa fa-cart-plus"></i></a>
									</div>-->
								</div>
							</div>'
            ,$data['id'],$data['img'],$data['img_name'],$_GET['id'],$data['name'],$data['price']);
    };
}else{
    ?>
    <h2>Каталог не имеет товаров</h2>
    <?
};

?>

        </div>
    </div>
</section>
<!-- Blog -->
<!-- Newsletter -->
<section class="text-center m-t-20 color-inher">
    <div class="container">
        <div class="newsletter newsletter-1 bg-3 no-border bor-rand-15">
            <h3 class="title">Newsletters</h3>
            <p>Lorem ipsum dolor sit amet consectetur Lorem ipsum dolor dolor sit amet consectetur</p>
            <form>
                <input type="text" class="form-item no-border" placeholder="Enter your email">
                <button type="button"><i class="fa fa-paper-plane-o"></i></button>
            </form>
            <img src="images/group-toys.png" class="w-80" alt="image">
        </div>
    </div>
</section>
<!-- Process -->
<section class="process p-0">
    <div class="container">
       <!-- <div class="row m-l-r-5">
            <div class="col-sm-6 col-md-3 p-5">
                <div class="media ht-media">
                    <div class="media-left">
                        <i class="fa fa-cogs color-3"></i>
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading color-3">Free Shipping</h5>
                        Donec sed odio dui
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 p-5">
                <div class="media ht-media">
                    <div class="media-left">
                        <i class="fa fa-send color-7"></i>
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading color-7">Free Shipping</h5>
                        Donec sed odio dui
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 p-5">
                <div class="media ht-media">
                    <div class="media-left">
                        <i class="fa fa-car color-4"></i>
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading color-4">100% Monney Back</h5>
                        Donec sed odio dui
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 p-5">
                <div class="media ht-media">
                    <div class="media-left">
                        <i class="fa fa-ship color-5"></i>
                    </div>
                    <div class="media-body">
                        <h5 class="media-heading color-5">100% Monney Back</h5>
                        Donec sed odio dui
                    </div>
                </div>
            </div>
        </div>-->
    </div>
</section>
<!-- Footer -->
<div class="bg-landscape"></div>
<footer class="color-inher">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 m-b-xs-30">
                    <h3 class="title">Infomation</h3>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Delivery Information</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 m-b-xs-30">
                    <h3 class="title">My Account</h3>
                    <ul>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Order History</a></li>
                        <li><a href="#">Wish List</a></li>
                        <li><a href="#">Guide use</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 m-b-xs-30">
                    <h3 class="title">Extras</h3>
                    <ul>
                        <li><a href="#">Brands</a></li>
                        <li><a href="#">Gift Vouchers</a></li>
                        <li><a href="#">Affiliates</a></li>
                        <li><a href="#">Specials</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 m-b-xs-30">
                    <h3 class="title">Flow us</h3>
                    <ul class="social_link">
                        <li><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i>Google +</a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i>Tiwtter</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bt">
        <div class="container">
            <p>© 2019 All rights reserved</p>
        </div>
    </div>
</footer>
<!-- jQuery -->
<script src="js/jquery/jquery-2.2.4.min.js"></script>
<!-- JqueryUI -->
<script src="js/jquery/jquery-ui.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap/bootstrap.min.js"></script>
<!-- Owl-coursel -->
<script src="js/owl-coursel/owl.carousel.js"></script>
<!-- Magnific-popup -->
<script src="js/magnific-popup/jquery.magnific-popup.min.js"></script>
<!-- Script -->
<script src="js/script.js"></script>
</body>
</html>