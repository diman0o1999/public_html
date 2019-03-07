<!DOCTYPE html>
<html lang="zxx">
<?php
include "db.php";
include './theme/heder.php';
?>
<!-- Sideshow -->
<div class="sideshow">
    <div class="container text-center">
        <div class="owl m-b-60" data-items="4" data-itemsDesktop="3" data-itemsDesktopSmall="2" data-itemsTablet="2" data-itemsMobile="1" data-transitionstyle="fade" data-singleItem="true" data-autoplay="true" data-pag="false" data-buttons="false">
            <img src="../images/banner-1.png"  alt="image">
            <img src="../images/banner-2.png"  alt="image">
            <img src="../images/banner-3.png"  alt="image">
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
        <h3 class="title text-center m-b-20">Витрина</h3>
        <div class="row product-1 product-bor">
            <?
			$qwery = mysql_query('SELECT * FROM catalog') or die(mysql_error());
            $mass = mysql_fetch_array($qwery);
           

            do{
                $qwery1 = mysql_query('SELECT * FROM ware WHERE main = '.$mass["id"].'') or die(mysql_error());
                $mass1 = mysql_fetch_array($qwery1);
                printf ('
							<div class="col-sm-6 col-md-4 col-lg-3">
								<!-- Product item -->
								<div class="product-item hover-img" style="height:350px">
									<a href="catalog.php?img=%s" class="product-img">
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
									<br>
										<a href="#"><i class="fa fa-heart-o"></i></a>
										<a href="#"><i class="fa fa-exchange"></i></a>
										<a href="#"><i class="fa fa-cart-plus"></i></a>
									</div>-->
								</div>
							</div>'
                    ,$mass['directory'],$mass1['img'],$mass1['img_name'],$mass['directory'],$mass['name'],$mass1['price']);
            }while ($mass = mysql_fetch_array($qwery));
            ?>


        </div>
    </div>
</section>
<!-- Blog 
<section class="m-t-30">
    <div class="container">
        <h3 class="title text-center m-b-20">Витрина 2</h3>
        <div class="row">

            <div class="col-sm-6 col-md-4">
                <div class="blog-item blog-item-border">
                    <a href="#" class="blog-img">
                        <img src="images/banner1.jpg" alt="image">
                    </a>
                    <div class="blog-caption">
                        <ul class="blog-date blog-date-left">
                            <li><a href="#">Payment</a></li>
                            <li><i class="fa fa-clock-o"></i>Nov 04, 2016</li>
                            <li><a href="#"><i class="fa fa-comments-o"></i>3</a></li>
                        </ul>
                        <h3 class="blog-heading"><a href="#">Lorem ipsum dolor sit sicing elit</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod temp incidunt ut labore et dolore magna aliqua uat </p>
                        <a href="#" class="btn ht-btn bg-3">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="blog-item blog-item-border">
                    <a href="#" class="blog-img">
                        <img src="images/banner2.jpg" alt="image">
                    </a>
                    <div class="blog-caption">
                        <ul class="blog-date blog-date-left">
                            <li><a href="#">Payment</a></li>
                            <li><i class="fa fa-clock-o"></i>Nov 04, 2016</li>
                            <li><a href="#"><i class="fa fa-comments-o"></i>3</a></li>
                        </ul>
                        <h3 class="blog-heading"><a href="#">Lorem ipsum dolor sit sicing elit</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod temp incidunt ut labore et dolore magna aliqua uat </p>
                        <a href="#" class="btn ht-btn bg-3">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="blog-item blog-item-border">
                    <a href="#" class="blog-img">
                        <img src="images/banner3.jpg" alt="image">
                    </a>
                    <div class="blog-caption">
                        <ul class="blog-date blog-date-left">
                            <li><a href="#">Payment</a></li>
                            <li><i class="fa fa-clock-o"></i>Nov 04, 2016</li>
                            <li><a href="#"><i class="fa fa-comments-o"></i>3</a></li>
                        </ul>
                        <h3 class="blog-heading"><a href="#">Lorem ipsum dolor sit sicing elit</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod temp incidunt ut labore et dolore magna aliqua uat </p>
                        <a href="#" class="btn ht-btn bg-3">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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
<? include './theme/footer.php'?>
</body>
</html>