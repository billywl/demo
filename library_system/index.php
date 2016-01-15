<?php
//字符格式化UTF-8
header("Content-type:text/html; charset=utf-8");
//初始化domdocument类
$xmldoc = new DOMDocument('1.0',"UTF-8");
//载入XML文档
$xmldoc->load("library.xml");
//获取book节点
$books = $xmldoc->getElementsByTagName("book");
?>
<table border="1">
	<tr>
		<th>图书</th>
		<th>属性</th>
		<th>操作</th>
	</tr>
<?php
//通过DOMNodeList里面的length属性来获取图书的数量
	$id = $books->length+1;
	for($i=0;$i<$books->length;$i++) {
?>
   <tr>
	     <td>
		 <img width="100" height="120" src=<?php echo  $books->item($i)->getElementsByTagName("imgpic")->item(0)->nodeValue;?> />
		 </td>
		 <td>
			编号: <?php echo $books->item($i)->getAttribute("id"); ?><br>
			分类: <?php echo $books->item($i)->getAttribute("category"); ?><br>
			标题：<?php echo $books->item($i)->getElementsByTagName("title")->item(0)->nodeValue; ?><br>
			作者：<?php echo $books->item($i)->getElementsByTagName("author")->item(0)->nodeValue; ?><br>
			出版日期:<?php echo $books->item($i)->getElementsByTagName("pubdate")->item(0)->nodeValue; ?><br>
			ISBN码:<?php echo $books->item($i)->getElementsByTagName("isbn")->item(0)->nodeValue; ?>
		 </td>
		 <td>
			<a href="edit.php?id=<?php echo $books->item($i)->getAttribute("id"); ?>">修改</a>
			&nbsp;
			<a href="deal.php?act=del&id=<?php echo $books->item($i)->getAttribute("id"); ?>">删除</a>
		 </td>
   </tr>
<?php
	}
?>
</table>
<a href="add.php?id=<?php echo $id ?>">添加数据</a>

