<?php
header("Content-type:text/html; charset=UTF-8");
$id = $_GET['id'];
if($id=='') {
	echo "<script language='javascript'>alert('参数错误');window.history.back();</script>";
}
?>
<form action="deal.php?act=add" method="post">
<table border="1">
	<tr>
		<td>编号</td>
		<td><input type="text" name="id" value="<?php echo $id ?>" readonly></td>
	</tr>
	<tr>
		<td>分类</td>
		<td><input type="text" name="category"></td>
	</tr>
	<tr>
		<td>封面</td>
		<td><input type="text" name="imgpic"></td>
	</tr>
	<tr>
		<td>书名</td>
		<td><input type="text" name="title"></td>
	</tr>
	<tr>
		<td>作者</td>
		<td><input type="text" name="author"></td>
	</tr>
	<tr>
		<td>出版日期</td>
		<td><input type="text" name="pubdate"></td>
	</tr>
	<tr>
		<td>ISBN</td>
		<td><input type="text" name="isbn"></td>
	</tr>
	<tr>
		<td>价格</td>
		<td><input type="text" name="price"></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" value="添加"></td>
	</tr>
</table>
</form>