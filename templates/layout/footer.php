<div class="footer">
    <div class="footer-article">
        <div class="wrap-content">
            <div class="row">
                <div class="footer-news col-sm-5">
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
                </div>

                <div class="footer-news col-sm-4">
                        <a class="fanpagefb-header" href="https://www.facebook.com/profile.php?id=100094437609398&amp;mibextid=LQQJ4d">
                            <img class="lazy loaded" onerror="this.src='thumbs/400x400x1/assets/images/noimage.png';"
                                 data-src="http://siquanaotreemquangchau.com/thumbs/400x400x1/upload/photo/thoi-trang-du-tiec-cho-be-gai230620202320124355-8625.jpg" alt="@ThanhE-chuyên sỉ quần áo trẻ em QC" src="http://siquanaotreemquangchau.com/thumbs/400x400x1/upload/photo/thoi-trang-du-tiec-cho-be-gai230620202320124355-8625.jpg" data-was-processed="true">                        <section>
                                <i class="fab fa-facebook-f"></i>
                                <span>Follow Me</span>
                                <p>@ThanhE-chuyên sỉ quần áo trẻ em QC</p>
                            </section>
                        </a>
                </div>
                <div class="slogan_footer">Thế giới thời trang bé yêu</div>
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
