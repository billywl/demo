<?php
$cid = $_POST ['cid'];
include_once '../DB.class.php';
$db=new DB();
$query = "select * from demo where cid='$cid'";
$result=$db->selectAll($query);

$db->close();
echo json_encode ( $result );