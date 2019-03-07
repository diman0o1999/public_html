
<!DOCTYPE html>
<html lang="zxx">
<?php
include "db.php";
$qr_result = mysql_query("SELECT * FROM `$db_name`.`ware`   WHERE `id`='" . $_GET['id'] . "' ORDER BY id DESC") or die(mysql_error());

while ($data = mysql_fetch_array($qr_result)) {
    $name=$data['name'];
    $price=$data['price'];
    $dir = $data['img'];
    $text = strlen($data['text']) > 0 ? $data['text'] : "Описание не готово";
    $image = '../images/images/'.$data['img'].'/'.$data['img_name'].'.jpg';
//    $dir=12;
//    $dir_name='sss';
}
$qr_result1 = mysql_query("SELECT * FROM `$db_name`.`catalog`   WHERE `directory`='" . $dir . "' ORDER BY id DESC") or die(mysql_error());
while ($data1 = mysql_fetch_array($qr_result1)) {
    $dir_name = $data1['name'];
}
include './theme/heder.php';
?>
<!-- breadcrumb-->
<div class="container">
    <ul class="breadcrumb">
        <li><a href="./index.php"><i class="fa fa-home m-r-5"></i>Главная</a></li>
        <li><a href="./catalog.php?img=<?=$dir;?>"><?=$dir_name;?></a></li>
        <li><?=$name?></li>
    </ul>
</div>
<!-- Product -->
<section class="m-t-0 p-b-40">
    <div class="container">
        <div class="thumb p-30">
            <div class="row">
                <!-- Product image gallery -->
                <div class="col-sm-6 col-md-7">
                    <ul class="thumbnails p-0">
                        <li>
                            <a class="thumbnail img-large image-zoom" href="<?=$image?>" title="<?=$name?>">
                                <img src="<?=$image?>" alt="<?=$name?>">
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Product decr -->
                <div class="col-sm-6 col-md-5">
                    <div class="product-pare m-t-xs-60">
                        <h1><?=$name?></h1>
                        <ul class="list-unstyled">
                            <li><span>Категория:</span><a href="./catalog.php?img=<?=$dir;?>"><?=$dir_name;?></a></li>
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
                    <a href="#tab-description" aria-controls="tab-description" role="tab" data-toggle="tab">Описание</a>
                </li>
<!--                Комментарии?-->
<!--                <li role="presentation">-->
<!--                    <a href="#tab-review" aria-controls="tab-review" role="tab" data-toggle="tab">Review(0)</a>-->
<!--                </li>-->
            </ul>
            <!-- Tab panes -->
            <div class="tab-content thumb p-30">
                <div role="tabpanel" class="tab-pane active" id="tab-description">
                    <?=$text;?>
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
            if (mysql_num_rows($qr_result) > 0) {?>
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
<!-- Footer -->
<div class="bg-landscape"></div>
<? include './theme/footer.php'?>
</body>
</html>