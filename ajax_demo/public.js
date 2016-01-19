
// 封装到public.js中
// 封装为自调用匿名函数是为了避免重名
//自调用匿名函数语法 (function(){})(); 被加载后会 执行一次
(function() {
	// 获取dom元素
	var $ = function(id) {
		return document.getElementById(id);
	};
	// 增加全局变量,指向$,这样可以在全局作用域中使用$(id)来获取页面的dom变量
	window.$ = $;

	// 返回对应的Ajax对象
	$.init = function() {
		try {
			return new XMLHttpRequest();
		} catch (e) {
		}
		try {
			return new ActiveXObject('Microsoft.XMLHTTP');
		} catch (e) {
		}
	};

	// Ajax的get请求
	$.get = function(url, data, callback, type) {
		// url：请求地址
		// data：请求参数
		// callback：回调函数
		// type：返回的类型是text还是xml还是json
		// 创建对象
		var xhr = $.init();
		// 添加时间戳解决缓存问题
		url = url + '?_=' + new Date().getTime();
		// 如果传递参数，则连接参数字符串
		if (data != null) {
			url = url + '&' + data;
		}
		// 初始化Ajax对象
		xhr.open('get', url);
		// 回调函数
		xhr.onreadystatechange = function() {
			if (xhr.readyState == 4 && xhr.status == 200) {
				// 当接收数据完毕后，调用指定的函数,将ajax对象
				// 的返回值做为参数进行传递
				if (type == null) {
					type = 'text';
				}

				if (type == 'text') {
					callback(xhr.responseText);
				}

				if (type == 'xml') {
					callback(xhr.responseXML);
				}

				if (type == 'json') {
					callback(eval('(' + xhr.responseText + ')'))
				}
			}
		};
		// 发送Ajax请求
		xhr.send(null);
	};

	// Ajax的post请求
	$.post = function(url, data, callback, type) {
		var xhr = $.init();
		xhr.open('post', url);
		xhr.setRequestHeader('Content-Type',
				'application/x-www-form-urlencoded');
		xhr.onreadystatechange = function() {
			if (xhr.readyState == 4 && xhr.status == 200) {
				if (type == null) {
					type = 'text';
				}

				if (type == 'text') {
					callback(xhr.responseText);
				}

				if (type == 'xml') {
					callback(xhr.responseXML);
				}

				if (type == 'json') {
					callback(eval('(' + xhr.responseText + ')'))
				}
			}
		};
		xhr.send(data);
	};
})();
