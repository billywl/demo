<?php
include_once '../DB.class.php';
$username = $_POST ['username'];
$password = $_POST ['password'];
$password=md5($password);

$db=new DB();


$query = "insert into demo values(null,'$username','$password',0)";
if ($db->insertOne($query)) {
 	$db->close(); 
	echo 1;
} else {
	echo '错误编号' . $link->errno . '<br/>';
	echo '错误内容' . $link->error . '<br/>';
	$db->close();
	echo 0;
}

