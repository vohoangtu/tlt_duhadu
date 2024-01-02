<div class="product col-md-3 col-sm-4 col-6">
    <a class="box-product text-decoration-none" href="<?= $item[$sluglang] ?>" title="<?= $item['name' . $lang] ?>">
        <p class="pic-product scale-img">
            <?= $func->getImage(['sizes' => '270x310x1', 'isWatermark' => true, 'prefix' => 'news', 'upload' =>
                UPLOAD_NEWS_L, 'image' => $item['photo'], 'alt' => $item['name' . $lang]]) ?>
        </p>
        <h3 class="name-product text-split"><?= $item['name' . $lang] ?></h3>
        <p class="price-product text-center">
            <span class="price-new">Liên hệ: <?=$optsetting["hotline"]?></span>
        </p>
    </a>
</div>