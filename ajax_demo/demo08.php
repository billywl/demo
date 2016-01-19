<?php
include_once '../DB.class.php';
$username = $_POST ['username'];
$password = $_POST ['password'];
$password=md5($password);

// mysql扩展连接
$link = new mysqli ('localhost','root','root');
// 判断结果
if ($link->connect_error) {
	
	// 结果出错了
	// 暴力处理，如果是真实线上项目（生产环境）必须写入到日志文件
	die('Connect Error (' . $mysqli->connect_errno . ') '
			. $mysqli->connect_error);
	exit ();
}

$link->select_db('demo');
$link->query('set names utf8');
var_dump ( $link );
$query = "insert into demo1 values(null,'$username','$password',0)";
if ($link->query($query)) {
 	$link->close(); 
	echo 1;
} else {
	echo '错误编号' . $link->errno . '<br/>';
	echo '错误内容' . $link->error . '<br/>';
}

