<div class="wrap-block-products-new mb-3">
    <div class="wrap-content py-4">
        <div class="block-title text-center">
            <h3>
                <span>SẢN PHẨM MỚI</span>
            </h3>
        </div>
        <div class="wrap-horizon-slider position-relative">
            <div class="owl-page owl-carousel owl-theme" data-items="screen:0|items:2|margin:20,
            screen:992|items:4|margin:30" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0"
                 data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="1" data-navcontainer=".control-brand">
                <?php foreach ($productNews as $k => $item) { ?>
                    <div class="product">
                        <a class="box-product text-decoration-none" href="<?= $item[$sluglang] ?>" title="<?= $item['name' . $lang] ?>">
                            <p class="pic-product scale-img">
                                <?= $func->getImage(['sizes' => '270x270x1', 'isWatermark' => true, 'prefix' => 'product', 'upload' =>
                                    UPLOAD_PRODUCT_L, 'image' => $item['photo'], 'alt' => $item['name' . $lang]]) ?>
                            </p>
                            <h3 class="name-product text-split"><?= $item['name' . $lang] ?></h3>
                            <p class="price-product text-center">
                                <span class="price-new">Liên hệ: <?=$optsetting["hotline"]?></span>
                            </p>
                        </a>
                    </div>
                <?php } ?>
            </div>
            <div class="control-brand control-owl transition"></div>
        </div>
    </div>
</div>
<div class="slideshow mb-5">
    <div class="wrap-content py-3">
        <div class="owl-page owl-carousel owl-theme" data-items="screen:0|items:3|margin:50" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="0" data-touchdrag="0" data-smartspeed="800" data-autoplayspeed="800" data-autoplaytimeout="5000" data-dots="0" data-animations="animate__fadeInDown, animate__backInUp, animate__rollIn, animate__backInRight, animate__zoomInUp, animate__backInLeft, animate__rotateInDownLeft, animate__backInDown, animate__zoomInDown, animate__fadeInUp, animate__zoomIn" data-nav="1" data-navcontainer=".control-slideshow">
            <?php foreach ($sliderSocial as $v) { ?>
                <div class="slideshow-item" owl-item-animation>
                    <a class="slideshow-image" href="<?= $v['link'] ?>" target="_blank" title="<?= $v['name' . $lang] ?>">
                        <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '370x110x1', 'upload' =>
                            UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php if (count($sliderQC)) { ?>
    <div class="slideshow">
        <div class="owl-page owl-carousel owl-theme" data-items="screen:0|items:1" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="0" data-touchdrag="0" data-smartspeed="800" data-autoplayspeed="800" data-autoplaytimeout="5000" data-dots="0" data-animations="animate__fadeInDown, animate__backInUp, animate__rollIn, animate__backInRight, animate__zoomInUp, animate__backInLeft, animate__rotateInDownLeft, animate__backInDown, animate__zoomInDown, animate__fadeInUp, animate__zoomIn" data-nav="1" data-navcontainer=".control-slideshow">
            <?php foreach ($sliderQC as $v) { ?>
                <div class="slideshow-item" owl-item-animation>
                    <a class="slideshow-image" href="<?= $v['link'] ?>" target="_blank" title="<?= $v['name' . $lang] ?>">
                        <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '1920x480x1', 'upload' =>
                            UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                    </a>
                </div>
            <?php } ?>
        </div>
        <div class="control-slideshow control-owl transition"></div>
    </div>
<?php } ?>
<div class="block-product-lists">
    <?php foreach ($splistnb as $list) {
        $spcatnb = $d->rawQuery("select * from #_product_cat where type = ? and find_in_set('hienthi',status) and find_in_set('noibat',status) and id_list = ? order by numb,id desc",array('san-pham', $list['id']));
        $sp = $d->rawQuery("select * from #_product where type = ? and find_in_set('hienthi',status) and find_in_set('noibat',status) and id_list = ? order by numb,id desc limit 8",array('san-pham', $list['id']));
        ?>
        <div class="wrap-content py-4">
            <div class="block-title text-center">
                <h3>
                    <span><?=$list["name$lang"]?></span>
                </h3>
            </div>
            <div class="block-item-cat mb-4">
                <span class="cat-item active" data-id="0">Tất cả</span>
                <?php foreach ($spcatnb as $cat){ ?>
                    <span class="cat-item" data-id="<?=$cat["id"]?>"><?=$cat["name$lang"]?></span>
                <?php } ?>
            </div>
            <div class="block-item-cat__content">
                <div class="row">
                    <?php foreach ($sp as $item){ ?>
                        <div class="col-lg-3 col-md-4 col-6">
                            <?php include TEMPLATE . "components/product_item.php"; ?>
                        </div>
                    <?php } ?>
                </div>

            </div>
            <div class="w-100 text-center my-5">
                <a href="<?=$list["slug$lang"]?>" class="text-decoration-none mx-auto d-inline-block"><span class="cat-item active">Xem Tất cả</span></a>
            </div>
        </div>
    <?php } ?>
</div>


<div class="wrap-product laysi">
    <div class="wrap-content">
        <div class="laysi1">
            <div class="laysi2 laysi3">
                <?php foreach ($splistnb as $list) {?>
                <a href="<?=$list["slug$lang"]?>" class="scale-img d-block">
                    <img class='lazy'  onerror="this.src='thumbs/400x310x1/assets/images/noimage.png';"
                         data-src='thumbs/400x310x1/upload/product/<?=$list["photo"]?>' alt='<?=$list["photo"]?>'/></a>
                <?php } ?>
            </div>
            <div class="laysi2">
                <div class="laysi2_name">Liên hệ lấy sỉ</div>
                <div class="laysi2_desc">Nhanh tay đăng ký để nhận ưu đãi mới nhất từ chúng tôi</div>
                <div class="laysi2_form">
                    <form action="index.php" method="post" autocomplete="off">
                        <input type="text" name="dataNewsletter[fullname]" placeholder="Họ tên" required>
                        <input type="text" name="dataNewsletter[email]" placeholder="Email">
                        <input type="text" name="dataNewsletter[phone]" placeholder="Số điện thoại" required>
                        <input type="text" name="dataNewsletter[address]" placeholder="Địa chỉ">
                        <textarea name="dataNewsletter[content]" placeholder="Nội dung"></textarea>
                        <button type="submit" name="submit-newsletter">Đăng ký ngay</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Ý kiến khách hàng -->
<div class="wrap-product ykienkhachhang">
    <div class="wrap-content">
        <div class="tieudey"><h2>Ý kiến khách hàng</h2></div>
        <div class="owl-page owl-carousel owl-theme" data-items="screen:0|items:2|margin:20,
            screen:992|items:3|margin:30" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0"
                 data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="1" data-navcontainer=".control-khachhang">
            <?php foreach ($khachhangNews as $item){ ?>
                <div class="ykien_item">
                    <picture>
                        <img class='lazy'  onerror="this.src='thumbs/128x128x1/assets/images/noimage.png';" data-src='thumbs/128x128x1/upload/news/<?=$item["photo"]?>' alt='<?=$item["name$lang"]?>'/>                </picture>
                    <section>
                        <p class="line-clamp-3"><?=$item["desc$lang"]?></p>
                        <h3><span class="line-clamp-1"><?=$item["name$lang"]?></span></h3>
                    </section>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- Giới thiệu -->
<div class="wrap-product gioithieu py-4">
    <div class="wrap-content">
        <div class="gioithieu1">
            <div class="gioithieu2">
                <div class="gioithieu_name">Về <?=$item["slug$lang"]?></div>
                <div class="gioithieu_desc">THANH E TỔNG KHO BUÔN SỈ QUẦN ÁO TRẺ EM GIÁ RẺ , XƯỞNG MAY QUẦN ÁO TRẺ EM LỚN NHẤT CHỢ TÂN BÌNH -  <?=$item["slug$lang"]?>

                    Gọi đặt hàng số: 0903 812 441

                    Tổng kho buôn, xưởng sỉ sản xuất số lượng lớn quần áo trẻ em , quảng Châu , thiết kế mẫu mã  hot trend giá rẻ cho khách bán chợ , shop , online, offline. Nhận đặt hàng theo yêu cầu, đảm bảo uy tín, chất lượng đi đầu. Cập nhật mẫu mã đi đầu theo xu hướng .</div>
                <a href="gioi-thieu" class="gioithieu_more">Xem thêm</a>
            </div>
            <div class="gioithieu2 gioithieu3">
                <a href="gioi-thieu" class="scale-img d-block">
                    <img class='lazy'  onerror="this.src='thumbs/280x370x1/assets/images/noimage.png';" data-src='thumbs/280x370x1/upload/news/z43873822427545fc405109ceab9c4be3694dab5d205f1-3930.jpg' alt='Về <?=$item["slug$lang"]?>'/>                </a>
                <a href="gioi-thieu" class="scale-img d-block">
                    <img class='lazy'  onerror="this.src='thumbs/280x370x1/assets/images/noimage.png';" data-src='thumbs/280x370x1/upload/news/z4386872945407bf7f1c5ce8b82b227bdcb61fcccf8915-4399.jpg' alt='Về <?=$item["slug$lang"]?>'/>                </a>
            </div>
        </div>
    </div>
</div>
<!-- Tin tức -->
<div class="wrap-product tintucvideo">
    <div class="wrap-content">
        <div class="block-title text-center">
            <h3>
                <span>Tin tức - video</span>
            </h3>
        </div>
        <div class="tintucvideo1">
            <div class="tintucvideo2">
                <?php echo $addons->set('video-fotorama', 'video-fotorama', 4); ?>            </div>
            <div class="tintucvideo2">
                <div class="newsnb_slick">
                    <div class="news-scroll position-relative">
                        <ul class="list-unstyled p-0 m-0">
                            <?php foreach ($newsnb as $item){ ?>
                            <li>
                                <div class="newsnb_item border-0 d-block">
                                    <a href="<?=$item["slug$lang"]?>">
                                        <picture class="d-block scale-img">
                                            <img class='d-block w-100'  onerror="this.src='thumbs/200x140x1/assets/images/noimage.png';" src='thumbs/200x140x1/upload/news/<?=$item["photo"]?>' alt='<?=$item["slug$lang"]?>'/>                            </picture>
                                        <section>
                                            <h3 class="line-clamp-1"><?=$item["name$lang"]?></h3>
                                            <p class="line-clamp-3"></p>
                                            <button>Xem thêm</button>
                                        </section>
                                    </a>
                                </div>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>