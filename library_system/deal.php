<?php
header("Content-type:text/html; charset=UTF-8");
$act = $_REQUEST['act'];

if($act=='add') {
	$id = $_POST['id'];
	$category = $_POST['category'];
	$imgpicval = $_POST['imgpic'];
	$titleval = $_POST['title'];
	$authorval = $_POST['author'];
	$pubdateval = $_POST['pubdate'];
	$isbnval = $_POST['isbn'];
	$priceval = $_POST['price'];

	//echo $id.$category.$title.$author.$pubdate.$isbn.$price;
	//初始化
	$xmldoc = new DOMDocument();
	$xmldoc->load("library.xml");

	//获取父节点（根节点）
	$books = $xmldoc->getElementsByTagName("books")->item(0);

	//创建要添加子节点
	$book = $xmldoc->createElement("book");

	$book->setAttribute('id',$id);
	$book->setAttribute('category',$category);
	
	//创建book下的子节点<imgpic>
	$imgpic = $xmldoc->createElement("imgpic");
	$imgpic->nodeValue=$imgpicval;
	//追加imgpic节点到book节点
	$book->appendChild($imgpic);

	//创建book下的子节点<title>
	$title = $xmldoc->createElement("title");
	$title->nodeValue=$titleval;
	//追加title节点到book节点
	$book->appendChild($title);

	////创建book下的子节点<author>
	$author = $xmldoc->createElement("author");
	$author->nodeValue=$authorval;
	//追加title节点到book节点
	$book->appendChild($author);

	////创建book下的子节点<pubdate>
	$pubdate = $xmldoc->createElement("pubdate");
	$pubdate->nodeValue=$pubdateval;
	//追加title节点到book节点
	$book->appendChild($pubdate);

	////创建book下的子节点<isbn>
	$isbn = $xmldoc->createElement("isbn");
	$isbn->nodeValue=$isbnval;
	//追加title节点到book节点
	$book->appendChild($isbn);

	////创建book下的子节点<price>
	$price = $xmldoc->createElement("price");
	$price->nodeValue=$priceval;
	//追加title节点到book节点
	$book->appendChild($price);

	
	
	
	
	//追加$book子节点到$books根节点
	$books->appendChild($book);

	//保存文件
	$xmldoc->save("library.xml");
	
	//跳转成功js输出添加成功并跳转到首页
	echo "<script language='javascript'>alert('添加成功');location.href='index.php';</script>";
} elseif($act=="del") {
	
	
	$id=$_GET['id']-1;
	
	//初始化domdocument类
	$xmldoc = new DOMDocument('1.0',"UTF-8");
	//载入XML文档
	$xmldoc->load("library.xml");
	//获取根节点
	$root = $xmldoc->getElementsByTagName("books")->item(0);
	//获取book节点
	$books = $xmldoc->getElementsByTagName("book");
	//查找我要删除的节点
	$book = $books->item($id);
	//节点删除
	$root->removeChild($book);
	//保存
	$xmldoc->save("library.xml");
	echo "<script language='javascript'>alert('删除成功');location.href='index.php';</script>";
} elseif($act=='update') {
	$id = $_POST['id'];
	$category = $_POST['category'];
	$imgpicval = $_POST['imgpic'];
	$titleval = $_POST['title'];
	$authorval = $_POST['author'];
	$pubdateval = $_POST['pubdate'];
	$isbnval = $_POST['isbn'];
	$priceval = $_POST['price'];

	//初始化domdocument类
	$xmldoc = new DOMDocument('1.0',"UTF-8");
	//载入XML文档
	$xmldoc->load("library.xml");
	//获取根节点
	$root = $xmldoc->getElementsByTagName("books")->item(0);
	//获取book节点
	$books = $root->getElementsByTagName("book");
	//查找我要删除的节点
	$id=$id-1;
	$book = $books->item($id);

	//book元素的category属性修改
	$book->setAttribute('category',$category);

	$imgpic = $book->getElementsByTagName("imgpic")->item(0);
	$imgpic->nodeValue=$imgpicval;

	$title = $book->getElementsByTagName("title")->item(0);
	$title->nodeValue=$titleval;

	$author = $book->getElementsByTagName("author")->item(0);
	$author->nodeValue=$authorval;

	$pubdate = $book->getElementsByTagName("pubdate")->item(0);
	$pubdate->nodeValue=$pubdateval;

	$pubdate = $book->getElementsByTagName("isbn")->item(0);
	$pubdate->nodeValue=$pubdateval;

	$price = $book->getElementsByTagName("price")->item(0);
	$price->nodeValue=$priceval;

	$xmldoc->save("library.xml");
	echo "<script language='javascript'>alert('修改成功');location.href='index.php';</script>";
}
?>