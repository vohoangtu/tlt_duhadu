<div class="container">
    <div class="gioithieu">
        <div class="center-layout">
            <div class="about_col">
                <div class="title_ab">
                    <span>Giới thiệu công ty</span>
                    <h3>Nhà Thầu Tây Ninh - Xây Dựng Hoàng Phúc</h3>
                </div>
                <div class="mta_ab">Tôi luôn ước mơ sẽ sở hữu một thương hiệu với môi trường làm việc thân thiện, thoải mái. Tôi muốn cùng anh em cộng tác trải nghiệm, trưởng thành và thành công trong lĩnh vực xây dựng. Vì lý do này Tôi muốn thành lập công ty của riêng mình để anh em có một nơi làm để phát triển thành công, để khách hàng đến với mình có được niềm tin cho sự chất lượng tốt nhất và niềm hạnh phúc thật sự.
                    Với thời gian trên 15 năm hoạt động trong lĩnh vực xây dựng Tôi nhận ra rằng kinh nghiệm chưa phải là chìa khóa của phát triển và thành công. Lấy quan niệm “Tận tâm, Kết quả, Uy tín’” làm phương châm hoạt động, HOÀNG PHÚC luôn hết mình vì lợi ích của khách hàng.</div>
                <a class="xthem" href="gioi-thieu" title="Xem thêm">Xem thêm</a>
                <div class="owl_tieuchi owl-carousel owl-theme">
                    <div class="box_tieuchi">
                        <div class="img_tieuchi middle">
                            <img class="img1" src="upload/news/v1-5536.png" alt="Uy tín"/>
                            <img class="img2" src="upload/news/v2-7779.png" alt="Uy tín"/>
                        </div>
                        <h3>Uy tín</h3>
                    </div>
                    <div class="box_tieuchi">
                        <div class="img_tieuchi middle">
                            <img class="img1" src="upload/news/v1-4758.png" alt="Chất lượng"/>
                            <img class="img2" src="upload/news/v2-8274.png" alt="Chất lượng"/>
                        </div>
                        <h3>Chất lượng</h3>
                    </div>
                    <div class="box_tieuchi">
                        <div class="img_tieuchi middle">
                            <img class="img1" src="upload/news/v3-9992.png" alt="Chuyên nghiệp"/>
                            <img class="img2" src="upload/news/v2-2989.png" alt="Chuyên nghiệp"/>
                        </div>
                        <h3>Chuyên nghiệp</h3>
                    </div>
                    <div class="box_tieuchi">
                        <div class="img_tieuchi middle">
                            <img class="img1" src="upload/news/v4-4586.png" alt="Tiện lợi"/>
                            <img class="img2" src="upload/news/v2-1286.png" alt="Tiện lợi"/>
                        </div>
                        <h3>Tiện lợi</h3>
                    </div>
                </div>
            </div>
            <div class="about_col">
                <div class="box_hinhanh ha_1"><img class="lazy mw100" data-src="thumbs/515x375x1/upload/photo/img1-29320.jpg" alt="Hình 1"/></div>
                <div class="box_hinhanh ha_2"><img class="lazy mw100" data-src="thumbs/515x375x1/upload/photo/img2-96091.jpg" alt="Hình 2"/></div>
            </div>
        </div>
    </div>
</div>
<div id="index_xaydung">
<?php if (count($splistnb)) {
    foreach ($splistnb as $vlist) { ?>
        <div class="_wrap-product">
            <div class="container">
                <div class="block-title __border text-center mb-4">
                    <h3>
                        <span><?= $vlist['name' . $lang] ?></span>
                    </h3>
                    <p>
                        Chúng tôi xây nhà - bạn xây tổ ấm
                    </p>
                </div>
                <div class="paging-product-category paging-product-category-<?= $vlist['id'] ?>" data-list="<?=
                $vlist['id'] ?>" data-type="<?= $vlist['type'] ?>"></div>
            </div>
        </div>
<?php }
} ?>
</div>
<div class="container">
<?php include TEMPLATE . "components/loban.php"; ?>
</div>
<div class="mb-5">
    <div class="wrap-content py-5">
        <div class="block-title __border text-center">
            <h3>
                <span>THIẾT KẾ NỘI THẤT</span>
            </h3>
        </div>
        <div class="__content">
            <div class="paging-product_thietkenoithat"></div>
        </div>
    </div>
</div>

<div class="vechungtoi">
    <div class="mx-auto container-1366 d-flex justify-content-between flex-wrap">
        <div class="vct-col">
            <div class="title_vct">Vì sao chọn chúng tôi</div>
            <div class="gird_vct">
                <div class="box_vct">
                    <a class="img_vct middle" href="thiet-ke"><img src="upload/news/vct1-9947.png" alt="Thiết kế"/></a>
                    <h3><a href="thiet-ke">Thiết kế</a></h3>
                    <p class="split-3rows">Có rất nhiều biến thể của Lorem Ipsum mà bạn có thể tìm thấy</p>
                </div>
                <div class="box_vct">
                    <a class="img_vct middle" href="thi-cong"><img src="upload/news/vct2-3488.png" alt="Thi công"/></a>
                    <h3><a href="thi-cong">Thi công</a></h3>
                    <p class="split-3rows">Nhờ thế, văn bản Lorem Ipsum được tạo ra mà không cần một sự lặp lại nào</p>
                </div>
                <div class="box_vct">
                    <a class="img_vct middle" href="noi-that"><img src="upload/news/vct3-4156.png" alt="Nội thất"/></a>
                    <h3><a href="noi-that">Nội thất</a></h3>
                    <p class="split-3rows">Trích đoạn chuẩn của Lorem Ipsum được sử dụng từ thế kỉ thứ 16</p>
                </div>
                <div class="box_vct">
                    <a class="img_vct middle" href="ho-tro"><img src="upload/news/vct4-8549.png" alt="Hỗ trợ"/></a>
                    <h3><a href="ho-tro">Hỗ trợ</a></h3>
                    <p class="split-3rows"> Tất cả các công cụ sản xuất văn bản mẫu Lorem Ipsum</p>
                </div>
            </div>
        </div>
        <div class="vct-col">
            <div class="tt_baogia">
                <span>ĐĂNG KÝ NHẬN BÁO GIÁ</span>
                <div class="note_ text-white">Hãy đăng ký để nhận thông tin giá sỉ mới nhất từ chúng tôi !!!</div>
            </div>
            <form class="form-newsletter validation-newsletter" novalidate method="post" action="" enctype="multipart/form-data">
                <div class="grid-dknt">
                    <div class="newsletter-input">
                        <input type="text" class="form-control" id="ten-newsletter" name="ten-newsletter" placeholder="Họ tên..." required />
                        <div class="invalid-feedback">Vui lòng nhập họ và tên</div>
                    </div>
                    <div class="newsletter-input">
                        <input type="text" class="form-control" id="dienthoai-newsletter" name="dienthoai-newsletter" placeholder="Điện thoại..." required />
                        <div class="invalid-feedback">Vui lòng nhập số điện thoại</div>
                    </div>
                    <div class="newsletter-input">
                        <input type="email" class="form-control" id="email-newsletter" name="email-newsletter" placeholder="Email..." required />
                        <div class="invalid-feedback">Vui lòng nhập địa chỉ email</div>
                    </div>
                    <div class="newsletter-input">
                        <input type="text" class="form-control" id="diachi-newsletter" name="diachi-newsletter" placeholder="Địa chỉ..." required />
                        <div class="invalid-feedback">Vui lòng nhập địa chỉ</div>
                    </div>
                </div>
                <div class="newsletter-input">
                    <textarea type="text" rows="1" class="form-control" id="noidung-newsletter" name="noidung-newsletter" placeholder="Nội dung..." required ></textarea>
                    <div class="invalid-feedback">Vui lòng nhập nội dung</div>
                </div>
                <div class="newsletter-button">
                    <input type="submit" name="submit-newsletter" value="GỬI" disabled>
                    <input type="hidden" name="recaptcha_response_newsletter" id="recaptchaResponseNewsletter">
                </div>
            </form>
        </div>
    </div>
</div>


<div class="wrap-intro mb-5">
    <div class="wrap-content py-5">
        <div class="block-title text-center">
            <h3>
                <span>DỊCH VỤ CHÚNG TÔI</span>
            </h3>
            <p>
                Chúng tôi xây nhà - bạn xây tổ ấm
            </p>
        </div>
        <div class="wrap-horizon-slider position-relative">
            <div class="owl-page owl-carousel owl-theme" data-items="screen:0|items:2|margin:20,
            screen:992|items:3|margin:30" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0"
                 data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="1" data-navcontainer=".control-brand">
                <?php foreach ($newsnb as $v) { ?>
                    <div>
                        <div class="block-item__service mb-3">
                            <div class="__image">
                                <a class="scale-img" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                                    <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '370x240x1', 'upload' =>
                                        UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                                </a>
                            </div>
                            <div class="__content">
                                <h3 class="index-news__name">
                                    <a class="text-decoration-none transition text-split
                                                                mt-0
" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a>
                                </h3>
                                <div class="news-shadow-desc text-split"><?= $v['desc' . $lang] ?></div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="control-brand control-owl transition"></div>
        </div>
    </div>
</div>
<?php
$index_news_item = array_pop($newsnb);
?>
<div id="block-index-news">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-12 mb-4">
                <div class="block-title">
                    <h3>
                    <span>
                        VIDEO - CLIP
                    </span>
                    </h3>
                </div>
                <div class="block-content video-intro">
                    <?= $addons->set('video-fotorama', 'video-fotorama', 4); ?>
                    <?php /* $addons->set('video-select', 'video-select', 4); */ ?>
                </div>
            </div>
            <div class="col-lg-8 col-12 mb-4">
                <div class="block-title">
                    <h3>
                    <span>
                        TIN TỨC SỰ KIỆN
                    </span>
                    </h3>
                </div>
                <div class="block-content row">
                    <div class="block-content__left col-lg-6 col-12 mb-4">
                        <div class="block-item__news-big">
                            <div class="news-shadow-article position-relative">
                                <a class="scale-img" href="<?= $index_news_item[$sluglang] ?>" title="<?= $index_news_item['name' . $lang] ?>">
                                    <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '350x200x1', 'upload' =>
                                        UPLOAD_NEWS_L, 'image' => $index_news_item['photo'], 'alt' => $index_news_item['name' . $lang]]) ?>
                                </a>
                                <div class="__content">
                                    <h3 class="index-news__name">
                                        <a class="text-decoration-none transition text-split" href="<?= $index_news_item[$sluglang] ?>" title="<?= $index_news_item['name' . $lang] ?>"><?= $index_news_item['name' . $lang] ?></a>
                                    </h3>
                                    <div class="__desc text-split"><?= $index_news_item['desc' . $lang] ?></div>
                                    <a class="xthemm" href="<?= $index_news_item[$sluglang] ?>" title="<?= $index_news_item[$sluglang] ?>">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-content__right col-lg-6 col-12">
                        <?php if (!empty($newsnb)) { ?>
                            <div class="position-relative">
                                <div class="news-scroll position-relative">
                                    <ul class="list-unstyled p-0 m-0">
                                        <?php foreach ($newsnb as $v) { ?>
                                            <li>
                                                <div class="block-item__news mb-3">
                                                    <div class="__image">
                                                        <a class="scale-img" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                                                            <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '150x110x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                                                        </a>
                                                    </div>
                                                        <div class="__content">
                                                            <h3 class="index-news__name">
                                                                <a class="text-decoration-none transition text-split
                                                                mt-0
" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a>
                                                            </h3>
                                                            <div class="news-shadow-desc text-split"><?= $v['desc' . $lang] ?></div>
                                                        </div>
                                                </div>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>