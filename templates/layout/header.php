<div class="header">
    <div class="header-top">
        <div class="wrap-content">
            <p class="info-header"><img src="assets/images/map.png" alt="" class="mr-1"><?= $optsetting['address']
                ?></p>
            <p class="info-header"><img src="assets/images/call.png" alt="" class="mr-1 blink_me"> Hotline:
                <span class="ml-1" style="font-family: Roboto-Bold;
    color: #ed1c24;
    font-size: 16px;"><?=
                    $optsetting['hotline']?></span></p>
            <ul class="social social-header list-unstyled p-0 m-0">
                <?php foreach ($social as $k => $v) { ?>
                    <li class="d-inline-block align-top mr-1">
                        <a href="<?= $v['link'] ?>" target="_blank">
                            <?= $func->getImage(['sizes' => '30x30x2', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
            <?php /*
            <div class="lang-header">
                <a href="ngon-ngu/vi/"><?= $func->getImage(['size-error' => '35x25x1', 'upload' => 'assets/images/', 'image' => 'vi.jpg', 'alt' => 'Tiếng Việt']) ?></a>
                <a href="ngon-ngu/en/"><?= $func->getImage(['size-error' => '35x25x1', 'upload' => 'assets/images/', 'image' => 'en.jpg', 'alt' => 'Tiếng Anh']) ?></a>
            </div>
            <?php if (array_key_exists($loginMember, $_SESSION) && $_SESSION[$loginMember]['active'] == true) { ?>
                <div class="user-header">
                    <a href="account/thong-tin">
                        <span>Hi, <?= $_SESSION[$loginMember]['username'] ?></span>
                    </a>
                    <a href="account/dang-xuat">
                        <i class="fas fa-sign-out-alt"></i>
                        <span><?= dangxuat ?></span>
                    </a>
                </div>
            <?php } else { ?>
                <div class="user-header">
                    <a href="account/dang-nhap">
                        <i class="fas fa-sign-in-alt"></i>
                        <span><?= dangnhap ?></span>
                    </a>
                    <a href="account/dang-ky">
                        <i class="fas fa-user-plus"></i>
                        <span><?= dangky ?></span>
                    </a>
                </div>
            <?php } ?>
            */ ?>
        </div>
    </div>
</div>