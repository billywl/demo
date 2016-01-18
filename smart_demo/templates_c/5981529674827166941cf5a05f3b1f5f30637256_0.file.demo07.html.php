<?php
/* Smarty version 3.1.29, created on 2016-01-18 14:33:46
  from "D:\www\demo\smart_demo\templates\demo07.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_569cf7ca383257_95502232',
  'file_dependency' => 
  array (
    '5981529674827166941cf5a05f3b1f5f30637256' => 
    array (
      0 => 'D:\\www\\demo\\smart_demo\\templates\\demo07.html',
      1 => 1453127624,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_569cf7ca383257_95502232 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_table')) require_once 'D:\\www\\demo\\smart_demo\\smarty\\plugins\\function.html_table.php';
if (!is_callable('smarty_function_html_checkboxes')) require_once 'D:\\www\\demo\\smart_demo\\smarty\\plugins\\function.html_checkboxes.php';
if (!is_callable('smarty_function_html_options')) require_once 'D:\\www\\demo\\smart_demo\\smarty\\plugins\\function.html_options.php';
if (!is_callable('smarty_function_html_radios')) require_once 'D:\\www\\demo\\smart_demo\\smarty\\plugins\\function.html_radios.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Insert title here</title>
        <style type='text/css'>
            #red {
                color: red;
                font-size: 14px;
            }
        </style>
    </head>
    <body>
        <h1>html标签演示</h1>
        <?php echo smarty_function_html_table(array('loop'=>$_smarty_tpl->tpl_vars['lamp']->value,'cols'=>'1','table_attr'=>'style="border:1px #ccc solid;"'),$_smarty_tpl);?>

		<h2>复选框</h2>
        <div id='red'>
            <?php echo smarty_function_html_checkboxes(array('name'=>'hobby','values'=>$_smarty_tpl->tpl_vars['values']->value,'checked'=>$_smarty_tpl->tpl_vars['checked']->value,'output'=>$_smarty_tpl->tpl_vars['output']->value),$_smarty_tpl);?>

        </div>
        <h2>下拉选项</h2>
        <select name='hobby'>
            <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['values']->value,'selected'=>$_smarty_tpl->tpl_vars['checked']->value,'output'=>$_smarty_tpl->tpl_vars['output']->value),$_smarty_tpl);?>

        </select>
        <h2>单选框</h2>
        <?php echo smarty_function_html_radios(array('name'=>'hobby','values'=>$_smarty_tpl->tpl_vars['values']->value,'checked'=>'1','output'=>$_smarty_tpl->tpl_vars['output']->value,'separator'=>'
        <br>
        '),$_smarty_tpl);?>

    </body>
</html>
<?php }
}
