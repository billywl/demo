
<?php
header("content-type:text/html;charset=utf-8");
if(isset($_POST['submit'])) {
	$zh = $_POST['zh'];
	$en = $_POST['en'];
	//创建SIMPLEXML对象
	$xml = simplexml_load_file('dict.xml');
	$word = $xml->addChild('word');
	$word->addChild('zh',$zh);
	$word->addChild('en',$en);
	$xml->asXML('dict.xml');
	echo "<script>alert('添加成功');window.location.href='index.php';</script>";
}
?>
<h1>数据添加</h1>
<form action='<?php echo $_SERVER['PHP_SELF']?>' method='post'>
英文:<input type='text' name='en'>
<br>
中文:<textarea name='zh' rows="5" cols="40"></textarea>
<br>
<input name='submit' type='submit' value='添加'>
</form>
