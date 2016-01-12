<?php
	//session入库
	//因为修改session机制必须借助session_set_save_handler()函数，该函数需要6个可以调用的回调函数，因此需要创建6个对应的函数
	
	//1.	开启session机制
	$link='';
	function sess_open(){
		//开启资源
		//连接数据库
		global $link;
		$link= mysqli_connect('localhost','root','root');
		$link->query('set names utf8');
		$link->query('use session');
		//echo __FUNCTION__,'<br/>';
	}
	
	//2.	关闭session
	function sess_close(){
		//关闭资源
	//	mysqli_close($link);
		echo __FUNCTION__,'<br/>';
		unset($link);
	}
	
	//3.	读取session
	function sess_read($sess_id){
		//从数据库读取数据
		//echo $sess_id;		//session系统提供
		//根据sessionid获取数据
		$query = "select * from session where sess_id = '{$sess_id}'";
	
		//在读数据的时候要过滤到过期的数据
// 		$expire = time() - ini_get('session.gc_maxlifetime');
// 		$sql = "select * from session where sess_id = '{$sess_id}' and sess_expire >= '{$expire}'";
		global $link;

//		var_dump($link);
		$res = $link->query($query);
		//得到的是一个数组
		$sess = $res->fetch_assoc();
		if($sess){
			//得到一个序列号化后的字符串
			//要进行反序列化，read，只负责读取数据，不负责加工数据
			echo $sess['sess_info'];
			echo "hah";
			return $sess['sess_info'];
		}
	
	
	//	echo __FUNCTION__,'<br/>';
// 		unset($link);
	}
	
	//4.	写入session
	function sess_write($sess_id,$sess_info){
		//向数据库写入数据
		//echo $sess_id,$sess_info;
		//获取时间
		global $link;
		$link= mysqli_connect('localhost','root','root');
		$link->query('set names utf8');
		$link->query('use session');


		//$time = time();
		$query = "insert into session values('{$sess_id}','{$sess_info}')";
		echo $query;
		$link->query($query);
	
		//echo __FUNCTION__,'<br/>';
	}
	
	//5.	销毁session
	function sess_destroy($sess_id){
/* 		//删除数据库数据
		$sql = "delete from session where sess_id = '{$sess_id}'";
		return mysql_query($sql); */
		echo __FUNCTION__,'<br/>';
	}
	
	//6.	回收session
	function sess_gc(){
/* 		//从数据库删除过期session数据
		//判断session是否过期，过期的删除
		$expire = ini_get('session.gc_maxlifetime');
		$expire = time() - $expire;						//得到最迟的时间，在$expire之前的数据都是过期的
	
		$sql = "delete from session where sess_expire < '{$expire}'";
		return mysql_query($sql); */
		echo __FUNCTION__,'<br/>';
	}
	
	//使用session_set_save_handler()注册session（修改session机制）之前
	//session_start();		//与之前一样
	
	//使用session_set_save_handler()修改session机制
	session_set_save_handler('sess_open','sess_close','sess_read','sess_write','sess_destroy','sess_gc');
	
	//想要使用session系统来处理的话，必须通过session_start函数
	session_start();
	
	//加入session数据
/*  	$_SESSION['name'] = '你好';
 	$_SESSION['age'] = 18;
	
	//查看数据
	var_dump($_SESSION); */
	//var_dump($link);
	
	//删除session
	//session_destroy();
