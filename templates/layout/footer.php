<div class="footer">
    <div class="footer-article">
        <div class="wrap-content">
            <div class="row">
                <div class="footer-news col-sm-6">
                    <h2 class="footer-title"><?= $footer['name' . $lang] ?></h2>
                    <div class="footer-info"><?= $func->decodeHtmlChars($footer['content' . $lang]) ?></div>
                </div>
                <div class="footer-news col-sm-3">
                    <h2 class="footer-title fs-18"><?= chinhsach ?></h2>
                    <ul class="footer-ul">
                        <?php foreach ($policy as $v) { ?>
                            <li><a href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a></li>
                        <?php } ?>
                    </ul>
                    <div class="my-3">
                        <a href="" class="bct"><img src="upload/photo/892789382334.png" alt="Công ty TNHH Cơ Khí Minh
                         An
                        Phát"></a>
                    </div>
                </div>

                <div class="footer-news col-sm-3">
                    <h2 class="footer-title  fs-18">Fanpage facebook</h2>
                    <?= $addons->set('fanpage-facebook', 'fanpage-facebook', 2); ?>
                </div>
            </div>
        </div>
    </div>
    <?php if(isset($tagsProduct) || isset($tagsNews)){ ?>
        <div class="footer-tags">
            <div class="wrap-content">
                <?php if(isset($tagsProduct) && !empty($tagsProduct)){
                    include TEMPLATE . "components/tags_product.php";
                } ?>
                <?php if(isset($tagsNews) && !empty($tagsNews)){
                    include TEMPLATE . "components/tags_news.php";
                } ?>
            </div>
        </div>
    <?php } ?>
    <div class="footer-powered">
        <div class="wrap-content">
            <div class="row">
                <div class="footer-copyright col-md-6">2023 CÔNG TY TNHH XÂY DỰNG HOÀNG PHÚC TÂY NINH. Design by tltvietnam.vn</div>
                <div class="footer-statistic col-md-6">
                    <span><?= dangonline ?>: <?= $online ?></span>
                    <span><?= trongthang ?>: <?= $counter['month'] ?></span>
                    <span><?= tongtruycap ?>: <?= $counter['total'] ?></span>
                </div>
            </div>
        </div>
    </div>
    <?php echo $addons->set('footer-map', 'footer-map', 6); ?>
    <?php echo $addons->set('messages-facebook', 'messages-facebook', 2); ?>
</div>
<?php if ($com != 'gio-hang' && config("order.active")) { ?>
    <a class="cart-fixed text-decoration-none" href="gio-hang" title="Giỏ hàng">
        <i class="fas fa-shopping-bag"></i>
        <span class="count-cart"><?= (!empty($_SESSION['cart'])) ? count($_SESSION['cart']) : 0 ?></span>
    </a>
<?php } ?>
<a class="btn-zalo btn-frame text-decoration-none" target="_blank" href="https://zalo.me/<?= preg_replace('/[^0-9]/', '', $optsetting['zalo']); ?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><?= $func->getImage(['size-error' => '35x35x2', 'upload' => 'assets/images/', 'image' => 'zl.png', 'alt' => 'Zalo']) ?></i>
</a>
<a class="btn-phone btn-frame text-decoration-none" href="tel:<?= preg_replace('/[^0-9]/', '', $optsetting['hotline']); ?>">
    <div class="animated infinite zoomIn kenit-alo-circle"></div>
    <div class="animated infinite pulse kenit-alo-circle-fill"></div>
    <i><?= $func->getImage(['size-error' => '35x35x2', 'upload' => 'assets/images/', 'image' => 'hl.png', 'alt' => 'Hotline']) ?></i>
</a>

<!-- Modal notify -->
<div class="modal modal-custom fade" id="popup-notify" tabindex="-1" role="dialog" aria-labelledby="popup-notify-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-top modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="popup-notify-label">Thông báo</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-danger" data-dismiss="modal">ĐÃ HIỂU</button>
            </div>
        </div>
    </div>
</div>
