<?php
$sql = "select count(*) as num from category";
mysql_connect ( 'localhost', 'root', '111111' );
mysql_select_db ( 'db_201404' );
mysql_query ( 'set names utf8' );
$result = mysql_query ( $sql );
$row = mysql_fetch_assoc ( $result );
$count = $row ['num']; // 总行数
$pageSize = 2; // 页尺寸
$page = $_GET ['page']; // 当前页码
$pageCount = ceil ( $count / $pageSize ); // 总页数
$pagePrev = $page - 1; // 上一页
$pageNext = $page + 1; // 下一页
if ($pagePrev < 1)
	$pagePrev = 1;
if ($pageNext > $pageCount)
	$pageNext = $pageCount;
$offset = ($page - 1) * $pageSize; // 偏移量
$sql = "select * from category order by id desc limit $offset,$pageSize";
$result = mysql_query ( $sql );
$data = array ();
while ( $row = mysql_fetch_assoc ( $result ) ) {
	$data [] = $row;
}

include '../Smarty/Smarty.class.php';
$smarty = new Smarty ();
$smarty->assign ( 'data', $data );
$smarty->assign ( 'count', $count );
$smarty->assign ( 'pageCount', $pageCount );
$smarty->assign ( 'pageSize', $pageSize );
$smarty->assign ( 'page', $page );
$smarty->assign ( 'pagePrev', $pagePrev );
$smarty->assign ( 'pageNext', $pageNext );
$str = $smarty->fetch ( 'page.htpl' );
echo $str;
