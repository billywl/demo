<?php
require 'smarty/Smarty.class.php';
$smarty = new Smarty();
$smarty->caching=true;
$title='mojap';
$smarty->assign('title',$title);
$smarty->display('demo08.html');


?>