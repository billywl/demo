<?php
/* Smarty version 3.1.29, created on 2016-01-18 14:16:36
  from "D:\www\demo\smart_demo\templates\demo04.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_569cf3c4a6d6f2_12125080',
  'file_dependency' => 
  array (
    'fafae728d61354903b6726712a39f28ca1800e41' => 
    array (
      0 => 'D:\\www\\demo\\smart_demo\\templates\\demo04.html',
      1 => 1453126471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_569cf3c4a6d6f2_12125080 ($_smarty_tpl) {
if (!is_callable('smarty_function_counter')) require_once 'D:\\www\\demo\\smart_demo\\smarty\\plugins\\function.counter.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<h1>counter计数器演示</h1>
<?php echo smarty_function_counter(array('start'=>0,'skip'=>'2'),$_smarty_tpl);?>
国内新闻<br>
<?php echo smarty_function_counter(array(),$_smarty_tpl);?>
国际新闻<br>
<?php echo smarty_function_counter(array('print'=>false),$_smarty_tpl);?>
娱乐新闻<br>
<?php echo smarty_function_counter(array(),$_smarty_tpl);?>
体育新闻<br>
</body>
</html><?php }
}
