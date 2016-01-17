<?php

header("Cache-Control: no-cache, must-revalidate");
include_once '../DB.class.php';
// 查询用户名是否存在
$username = $_GET ['username'];
$db=new DB();
$query = "select * from admin where username='$username'";
$result = $db->selectOne($query);
//$count = $result->num_rows;
$count = mysqli_num_rows($result);
mysqli::close();
if ($count > 0) {
	echo 1; // 存在
} else {
	echo 0; // 不存在
}