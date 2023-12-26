<div class="news col-md-6">
    <div class="row">
        <a class="news-image col-sm-5" href="<?= $item[$sluglang] ?>" title="<?= $item['name' . $lang] ?>">
                        <span class="scale-img">
                            <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '160x120x1', 'upload' =>
                                UPLOAD_NEWS_L, 'image' => $item['photo'], 'alt' => $item['name' . $lang]]) ?>
                        </span>
        </a>
        <div class="news-info col-sm-7">
            <h3 class="news-name">
                <a class="text-decoration-none text-split transition" href="<?= $item[$sluglang] ?>" title="<?=
                $item['name'
                . $lang] ?>"><?= $item['name' . $lang] ?></a>
            </h3>
            <p class="news-time"><?= ngaydang ?>: <?= date("d/m/Y h:i A", $item['date_created']) ?></p>
            <div class="news-desc text-split"><?= $item['desc' . $lang] ?></div>
        </div>
    </div>
</div>