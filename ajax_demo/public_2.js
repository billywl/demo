
/*function createXhr() {
	var xhr;
	// 判断客户端浏览器的代理头信息中是否有'MSIE'字符串
	// 如果有，说明是IE浏览器
	if (window.navigator.userAgent.indexOf('MSIE') > 0) {
		xhr = new ActiveXObject('Microsoft.XMLHTTP');
	} else { // 如果没有，是其它类型浏览器
		xhr = new XMLHttpRequest();
	}
	// 返回创建的ajax对象
	return xhr;
}*/
function createXhr() {
	try {
		return new XMLHttpRequest();
	} catch (e) {

	}

	try {
		return new ActiveXObject('Microsoft.XMLHTTP');
	} catch (e) {

	}

	alert('请换一个浏览器！！！');
}

function $(id) {
	return document.getElementById(id);
}
