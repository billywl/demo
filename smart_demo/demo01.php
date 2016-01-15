<?php
require 'smarty/Smarty.class.php';
$smarty = new Smarty();
$smarty->left_delimiter = '<{';
$smarty->right_delimiter = '}>'; 
 
/* $smarty->setTemplateDir('./templates');
$smarty->setCompileDir('./templates_c');
$smarty->setConfigDir('./configs');
$smarty->setCacheDir('./cache'); */
 

$title = 'Smarty模板引擎';
$content = 'Smarty模板引擎是目前业界最著名的模板引擎！';

//模板变量分配函数 assgin
$smarty->assign('title',$title);
$smarty->assign('content',$content);
//模板输出显示函数display
$smarty->display('demo01.html');
?>