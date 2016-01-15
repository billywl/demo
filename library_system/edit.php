<?php
header("Content-type:text/html; charset=UTF-8");
$id = $_GET['id']-1;
if($id==='') {
	echo "<script language='javascript'>alert('参数错误');window.history.back();</script>";
}
//初始化DOMDocumnet
$xmldoc = new DOMDocument();
//载入load
$xmldoc->load("library.xml");
//获取$book节点
$books = $xmldoc->getElementsByTagName("book")->item($id);
$category = $books->getAttribute('category');
$imgpic = $books->getElementsByTagName("imgpic")->item(0)->nodeValue;
$title = $books->getElementsByTagName("title")->item(0)->nodeValue;
$author = $books->getElementsByTagName("author")->item(0)->nodeValue;
$pubdate = $books->getElementsByTagName("pubdate")->item(0)->nodeValue;
$isbn = $books->getElementsByTagName("isbn")->item(0)->nodeValue;
$price = $books->getElementsByTagName("price")->item(0)->nodeValue;
?>
<form action="deal.php?act=update" method="post">
<table border="1">
	<tr>
		<td>编号</td>
		<td><input type="text" name="id" value="<?php echo $id+1?>" readonly></td>
	</tr>
	<tr>
		<td>分类</td>
		<td><input type="text" name="category" value="<?php echo $category?>"></td>
	</tr>
	<tr>
		<td>封面</td>
		<td><input type="text" name="imgpic" value="<?php echo $imgpic?>"></td>
	</tr>
	<tr>
		<td>书名</td>
		<td><input type="text" name="title" value="<?php echo $title?>"></td>
	</tr>
	<tr>
		<td>作者</td>
		<td><input type="text" name="author" value="<?php echo $author?>"></td>
	</tr>
	<tr>
		<td>出版日期</td>
		<td><input type="text" name="pubdate" value="<?php echo $pubdate?>"></td>
	</tr>
	<tr>
		<td>ISBN</td>
		<td><input type="text" name="isbn" value="<?php echo $isbn?>"></td>
	</tr>
	<tr>
		<td>价格</td>
		<td><input type="text" name="price" value="<?php echo $price?>"></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" value="修改"></td>
	</tr>
</table>
</form>