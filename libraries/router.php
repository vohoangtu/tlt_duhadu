<?php
/* Check HTTP */

/**
 * @var $func
 * @var $http
 * @var $config
 * @var $configUrl
 */
$func->checkHTTP($http, $config['arrayDomainSSL'], $configBase, $configUrl);

/* Validate URL */
$func->checkUrl($config['website']['index']);

/* Check login */
$func->checkLoginMember();

/* Mobile detect */
$deviceType = ($detect->isMobile() || $detect->isTablet()) ? 'mobile' : 'computer';
define('TEMPLATE', ($deviceType == 'computer') ? './templates/' : './templates/');

/* Router */
$router->setBasePath($config['database']['url']);
$router->map('GET', ADMIN . '/', function () {
    global $func, $config;
    $func->redirect($config['database']['url'] . ADMIN . "/index.php");
    exit;
});
$router->map('GET', ADMIN, function () {
    global $func, $config;
    $func->redirect($config['database']['url'] . ADMIN . "/index.php");
    exit;
});
$router->map('GET|POST', '', 'index', 'home');
$router->map('GET|POST', 'index.php', 'index', 'index');
$router->map('GET|POST', 'sitemap.xml', 'sitemap', 'sitemap');
$router->map('GET|POST', '[a:com]', 'allpage', 'show');
$router->map('GET|POST', '[a:com]/[a:lang]/', 'allpagelang', 'lang');
$router->map('GET|POST', '[a:com]/[a:action]', 'account', 'account');
$router->map('GET', THUMBS . '/[i:w]x[i:h]x[i:z]/[**:src]', function ($w, $h, $z, $src) {
    global $func;
    $func->createThumb($w, $h, $z, $src, null, THUMBS);
}, 'thumb');
$router->map('GET', WATERMARK . '/product/[i:w]x[i:h]x[i:z]/[**:src]', function ($w, $h, $z, $src) {
    global $func, $cache;
    $wtm = $cache->get("select status, photo, options from #_photo where type = ? and act = ? limit 0,1", array('watermark', 'photo_static'), 'fetch', 7200);
    $func->createThumb($w, $h, $z, $src, $wtm, "product");
}, 'watermark');
$router->map('GET', WATERMARK . '/news/[i:w]x[i:h]x[i:z]/[**:src]', function ($w, $h, $z, $src) {
    global $func, $cache;
    $wtm = $cache->get("select status, photo, options from #_photo where type = ? and act = ? limit 0,1", array('watermark-news', 'photo_static'), 'fetch', 7200);
    $func->createThumb($w, $h, $z, $src, $wtm, "news");
}, 'watermarkNews');

/* Router match */
$match = $router->match();

/* Router check */
if (is_array($match)) {
    if (is_callable($match['target'])) {
        call_user_func_array($match['target'], $match['params']);
    } else {
        $com = (!empty($match['params']['com'])) ? htmlspecialchars($match['params']['com']) : htmlspecialchars($match['target']);
        $getPage = !empty($_GET['p']) ? htmlspecialchars($_GET['p']) : 1;
    }
} else {
    header('HTTP/1.0 404 Not Found', true, 404);
    include("404.php");
    exit;
}

/* Setting */
$sqlCache = "select * from #_setting";
$setting = $cache->get($sqlCache, null, 'fetch', 7200);
$optsetting = (!empty($setting['options'])) ? json_decode($setting['options'], true) : null;

/* Lang */
if (!empty($match['params']['lang'])) $_SESSION['lang'] = $match['params']['lang'];
else if (empty($_SESSION['lang']) && empty($match['params']['lang'])) $_SESSION['lang'] = $optsetting['lang_default'];
$lang = $_SESSION['lang'];

/* Check lang */
$weblang = (!empty($config['website']['lang'])) ? array_keys($config['website']['lang']) : array();

if (!in_array($lang, $weblang)) {
    $_SESSION['lang'] = 'vi';
    $app['locale'] = $_SESSION['lang'];
    $lang = $app['locale'];
}

/* Slug lang */
$sluglang = 'slugvi';

/* SEO Lang */
$seolang = "vi";

/* Require datas lang */
require_once LIBRARIES . "lang/$lang.php";

$__table = [
    'product', 'news'
];

foreach ($__table as $table) {
    $row = $d->rawQueryOne("select id,namevi,type from #_$table where $sluglang = ? and find_in_set('hienthi',status) limit 0,1", array($com));
    if($row){
        $source = $table;
        $template = "{$source}/{$source}" . '_detail';
        $seo->set('type', $source =='product' ? "product" : "article");
        $titleMain = $row["namevi"];
        $type = $row['type'] ?? null;
    }
}
if(!empty($com) && !in_array($com, ['index', 'tim-kiem', 'account', 'sitemap'])){


    foreach ($__table as $table){
        $distinctType[$table] = array_keys($config[$table] ?? []);
    }
    function setRequick($field, $key, $nameType, $tbl, $config){
        return [
            "tbl" => $tbl,
            "field" => $field,
            "source" => $config[$key][$nameType]['source'] ?? $key,
            "com" => $config[$key][$nameType]['com'] ?? $nameType,
            "type" => $nameType,
            "menu" => $config[$key][$nameType]['menu'] ?? false
        ];
    }
    foreach ($distinctType as $key => $types){
        foreach ($types as  $nameType) {
            if (!isset($config[$key][$nameType])) continue;
            $requick[] = setRequick("id", $key, $nameType, $key, $config);

            if (isset($config[$key][$nameType]['list']) && isset($config[$key][$nameType]['title_main_list'])) {
                $requick[] = setRequick("idl", $key, $nameType, $key . "_list", $config);
            }

            if (isset($config[$key][$nameType]['cat']) && isset($config[$key][$nameType]['title_main_cat'])) {
                $requick[] = setRequick("idc", $key, $nameType, $key . "_cat", $config);
            }

            if (isset($config[$key][$nameType]['item']) && isset($config[$key][$nameType]['title_main_item'])) {
                $requick[] = setRequick("idi", $key, $nameType, $key . "_item", $config);
            }

            if (isset($config[$key][$nameType]['sub']) && isset($config[$key][$nameType]['title_main_sub'])) {
                $requick[] = setRequick("ids", $key, $nameType, $key . "_sub", $config);
            }

            if (isset($config[$key][$nameType]['brand']) && isset($config[$key][$nameType]['title_main_brand'])) {
                $requick[] = setRequick("idb", $key, $nameType, $key . "_brand", $config);
            }
        }
    }

    /* Tối ưu link */
    $requick = array_merge($requick, array(
        array("tbl" => "tags", "tbltag" => "product", "field" => "id", "source" => "tags", "com" => "tags-san-pham", "type" => "san-pham", "menu" => true),
        array("tbl" => "tags", "tbltag" => "news", "field" => "id", "source" => "tags", "com" => "tags-tin-tuc", "type" => "tin-tuc", "menu" => true),
        array("tbl" => "product", "field" => "id", "source" => "product", "com" => "thu-vien-anh", "type" => "thu-vien-anh", "menu" => true),
        array("tbl" => "photo", "field" => "id", "source" => "video", "com" => "video", "type" => "video", "menu" => true),
        array("tbl" => "static", "field" => "id", "source" => "static", "com" => "gioi-thieu", "type" => "gioi-thieu", "menu" => true),
        array("tbl" => "", "field" => "id", "source" => "", "com" => "lien-he", "type" => "", "menu" => true),
    ));
    /* Find data */
    foreach ($requick as $k => $v) {
        $urlTbl = (!empty($v['tbl'])) ? $v['tbl'] : '';
        $urlTblTag = (!empty($v['tbltag'])) ? $v['tbltag'] : '';
        $urlType = (!empty($v['type'])) ? $v['type'] : '';
        $urlField = (!empty($v['field'])) ? $v['field'] : '';
        $urlCom = (!empty($v['com'])) ? $v['com'] : '';

        if (!empty($urlTbl) && !in_array($urlTbl, ['static', 'photo'])) {
            $row = $d->rawQueryOne("select id from #_$urlTbl where $sluglang = ? and type = ? and find_in_set('hienthi',status) limit 0,1", array($com, $urlType));

            if (!empty($row['id'])) {
                $_GET[$urlField] = $row['id'];
                $com = $urlCom;
                break;
            }
        }
    }

    $collect = new \Illuminate\Support\Collection($requick);

    $allComs = $collect->map(function ($key){
        return $key['com'];
    })->unique();

    $object = $collect->filter(function ($value) use ($com){
        return $value['com'] == $com && $value['field'] == 'id';
    })->first();

    $source = $object['source'] ?? '';
    $template = "{$source}/{$source}" . (isset($_GET['id']) ? "_detail" : "");
    $seo->set('type', isset($_GET['id']) ? "article" : "object");
    $titleMain = $config[$source][$object['type'] ?? null]['title_main'] ?? '';
    $type = $object['type'] ?? null;

}

switch ($com){
    case '':
    case 'index':
        $source = 'index';
        $template = 'index/index';
        $seo->set('type', 'website');
    break;
    case 'lien-he':
        $source = "contact";
        $template = "contact/contact";
        $seo->set('type', 'object');
        $titleMain = lienhe;
    break;
    case 'tim-kiem':
        $source = "customSearch";
        $template = "search/index";
        $seo->set('type', 'object');
        $titleMain = "Tìm Kiếm";
        break;
//    case 'du-toan-chi-phi':
//        $source = "dutoanchiphi";
//        $template = "action/dutoanchiphi";
//        $seo->set('type', 'object');
//        $titleMain = "DỰ TOÁN CHI PHÍ";
//        break;
}

//dump($source, $template, $type, $_REQUEST);
if (!$source){
    header('HTTP/1.0 404 Not Found', true, 404);
    include("404.php");
    exit();
}

/* Require datas for all page */
require_once SOURCES . "allpage.php";

/* Include sources */
if (!empty($source)) {
    include SOURCES . $source . ".php";
}
if (empty($template)) {
    header('HTTP/1.0 404 Not Found', true, 404);
    include("404.php");
    exit();
}
