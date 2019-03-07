
<!DOCTYPE html>
<html lang="zxx">
<?php
include "db.php";
$qr_result = mysql_query("SELECT * FROM `$db_name`.`ware`   WHERE `id`='" . $_GET['id'] . "' ORDER BY id DESC") or die(mysql_error());

while ($data = mysql_fetch_array($qr_result)) {
    $name='as';
    $price='12';
    $dir=12;
    $dir_name='sss';



}
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product detail 1</title>
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
    <!-- Magnific-popup -->
    <link rel="stylesheet" type="text/css" href="css/magnific-popup/magnific-popup.css">
    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
    <!-- Fw -->
    <link rel="stylesheet" type="text/css" href="css/fw.css" media="screen">
</head>
<body>
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
<!-- breadcrumb-->
<div class="container">
    <ul class="breadcrumb">
        <li><a href="#"><i class="fa fa-home m-r-5"></i>Home</a></li>
        <li><a href="#">Product</a></li>
        <li><a href="#">Book & Music</a></li>
        <li>Lorem ipsum dolor</li>
    </ul>
</div>
<!-- Product -->
<section class="m-t-0 p-b-40">
    <div class="container">
        <div class="thumb p-30">
            <div class="row">
                <!-- Product image gallery -->
                <!-- Product decr -->
                <div class="col-sm-6 col-md-5">
                    <div class="product-pare m-t-xs-60">
                        <h1><?=$name?></h1>
                        <ul class="list-unstyled">
                            <li><span>Категория:</span><a href="/product.php?id=<?=$dir?>"><?=$dir_name?></a></li>
                        </ul>
                        <p class="product-price"><?=$price?>.руб</p>
                        <div class="quantily-wrap">
                            <label class="control-label" for="input-quantity">Qty</label>
                            <input type="number" value="1" size="2" id="input-quantity" class="form-control form-item">
                        </div>
                        <button type="button" class="btn ht-btn ht-btn-3x bg-4 m-t-0">Add to Cart</button>
                        <div class="m-t-30">
                            <a href="#">0 reviews</a> / <a href="#">Write a review</a>
                        </div>
                    </div>
                </div>
            </div><!-- End row -->
        </div>
        <!-- Tabs -->
        <div class="ht-tabs m-t-60">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active m-l-30">
                    <a href="#tab-description" aria-controls="tab-description" role="tab" data-toggle="tab">Description</a>
                </li>
                <li role="presentation">
                    <a href="#tab-review" aria-controls="tab-review" role="tab" data-toggle="tab">Review(0)</a>
                </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content thumb p-30">
                <div role="tabpanel" class="tab-pane active" id="tab-description">
                    iPhone is a revolutionary new mobile phone that allows you to make 	a call by simply tapping a name or number in your address book, a favorites list, or a call log. It also automatically syncs all your contacts from a PC, Mac, or Internet service. And it lets you select and listen to voicemail messages in whatever order you want just like email.iPhone is a revolutionary new mobile phone that allows you to make a call by simply tapping a name or number in your address book, a favorites list, or a call log. It also automatically syncs all your contacts from a PC, Mac, or Internet service. And it lets you select and listen to voicemail messages in whatever order you want just like email.<br/> iPhone is a revolutionary new mobile phone that allows you to make a call by simply tapping a name or number in your address book, a favorites list, or a call log. It also automatically syncs all your contacts from a PC, Mac, or Internet service. And it lets you select and listen to voicemail messages in whatever order you want just like email.iPhone is a revolutionary new mobile phone that allows you to make a call by simply tapping a name or number in your address book, a favorites list, or a call log. It also automatically syncs all your contacts from a PC, Mac, or Internet service. And it lets you select and listen to voicemail messages in whatever order you want just like email.<br/>iPhone is a revolutionary new mobile phone that allows you to make a call by simply tapping a name or number in your address book, a favorites list, or a call log. It also automatically syncs all your contacts from a PC, Mac, or Internet service. And it lets you select and listen to voicemail messages in whatever order you want just like email.iPhone is a revolutionary new mobile phone that allows you to make a call by simply tapping a name or number in your address book, a favorites list, or a call log. It also automatically syncs all your contacts from a PC, Mac, or Internet service. And it lets you select and listen to voicemail messages in whatever order you want just like email.
                </div>
                <div role="tabpanel" class="tab-pane" id="tab-review">
                    <form class="form-horizontal">
                        <div>
                            <p>There are no reviews for this product.</p>
                        </div>
                        <h3>Write a review</h3>
                        <div class="form-group required">
                            <div class="col-sm-12">
                                <label class="control-label m-b-10" for="input-name">Your Name</label>
                                <input type="text" name="name" value="" id="input-name" class="form-control form-item">
                            </div>
                        </div>
                        <div class="form-group required">
                            <div class="col-sm-12">
                                <label class="control-label m-b-10" for="input-review">Your Review</label>
                                <textarea name="text" rows="5" id="input-review" class="form-control form-item"></textarea>
                                <div class="help-block">
                                    <span class="text-danger">Note:</span> HTML is not translated!
                                </div>
                            </div>
                        </div>
                        <div class="form-group required">
                            <div class="col-sm-12">
                                <label class="control-label">Rating</label>
                                Bad
                                <input type="radio" name="rating" value="1">
                                <input type="radio" name="rating" value="2">
                                <input type="radio" name="rating" value="3">
                                <input type="radio" name="rating" value="4">
                                <input type="radio" name="rating" value="5">
                                Good
                            </div>
                        </div>
                        <div class="buttons clearfix">
                            <div class="pull-right">
                                <button type="button" id="button-review" data-loading-text="Loading..." class="btn btn-primary">Continue</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- End tabs -->
    </div>
</section>
<!-- Product relaed -->
<section class="m-b-50">
    <div class="container product-bor">


                <?

                $qr_result = mysql_query("SELECT * FROM `$db_name`.`ware`   WHERE `img`='" . $dir . "' LIMIT 5") or die(mysql_error());
                if (mysql_num_rows($qr_result) > 0) {
                    ?>
        <div class="thumb p-30 p-b-0">
                    <h3 class="title">Похожие продукты</h3>
                    <div class="row">
                        <?
                        while ($data = mysql_fetch_array($qr_result)) {
                            printf('
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
                                , $data['id'], $data['img'], $data['img_name'], $_GET['id'], $data['name'], $data['price']);
                        };
                        ?>
                    </div>
                    </div>
                    <?
                };
                ?>
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