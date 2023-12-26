<?php
include "config.php";
use NN\PaginationsAjax;
/* Paginations */
$pagingAjax = new PaginationsAjax();
$pagingAjax->perpage = (!empty($_GET['perpage'])) ? htmlspecialchars($_GET['perpage']) : 1;
$eShow = htmlspecialchars($_GET['eShow']);
$idList = (!empty($_GET['idList'])) ? htmlspecialchars($_GET['idList']) : 0;
$p = (!empty($_GET['p'])) ? htmlspecialchars($_GET['p']) : 1;
$start = ($p - 1) * $pagingAjax->perpage;
$pageLink = "api/product.php?perpage=" . $pagingAjax->perpage;
$tempLink = "";
$where = "";
$params = array();
$_type = (!empty($_GET['type'])) ? htmlspecialchars($_GET['type']) : 'xay-dung';
/* Math url */
if ($idList) {
    $tempLink .= "&idList=" . $idList;
    $where .= " and id_list = ?";
    array_push($params, $idList);
}
$tempLink .= "&p=";
$pageLink .= $tempLink;

/* Get data */
$sql = "select * from #_news where type='"
    .$_type."' $where and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb,id desc";

$sqlCache = $sql . " limit $start, $pagingAjax->perpage";
$items = $cache->get($sqlCache, $params, 'result', 7200);

/* Count all data */
$countItems = count($cache->get($sql, $params, 'result', 7200));

/* Get page result */
$pagingItems = $pagingAjax->getAllPageLinks($countItems, $pageLink, $eShow);
?>
<?php if ($countItems) { ?>
    <div class="grid-page w-clear">
        <?php foreach ($items as $k => $item) {
            include ROOT . "templates/components/product_item.php";
        } ?>
    </div>
    <div class="pagination-ajax"><?= $pagingItems ?></div>
<?php } ?>