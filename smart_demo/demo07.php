<?php
require 'smarty/Smarty.class.php';
$smarty = new Smarty();

$lamp = array('linux','apache','mysql','php');
$smarty->assign('lamp',$lamp);

$values = array(1,2,3);
$checked = array(2);
$output = array('看美女','踢足球','写代码');

$smarty->assign('values',$values);
$smarty->assign('checked',$checked);
$smarty->assign('output',$output);

$smarty->display('demo07.html');
?>