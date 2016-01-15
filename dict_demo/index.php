
<?php
header("content-type:text/html;charset=utf-8");
if(isset($_POST['submit'])) {
	$en = $_POST['en'];
	$xml = simplexml_load_file('dict.xml');
	$words = $xml->xpath("/words/word[en='".$en."']");
	echo '您要查询的单词含义为:'.$words[0]->zh;
}
?>
<h1>在线词霸</h1>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method='post'>
<input name='en' id='en' type='text' value='请输入您要查询的词'>
<br>
<input type='submit' name='submit' value='查询'>
</form>

<script language='javascript'>
window.onload=function() {
	document.getElementById('en').onfocus=function() {
		this.value='';
	}
}
</script>
