/*
*
* created by WW
* on Dec. 21, 2019
*
* 1. terminal: node ***.js
* 2. browser -> http://127.0.0.1:****
*
*/

// 载入模块
var http = require("http");
var fs = require('fs');

// 创建服务器
http.createServer(function(request, response){	//函数中调用了一个带两个参数的function函数
    
   	//终端打印信息
    console.log('收到客户端的请求了, 请求路径是: ',request.url);
	console.log('请求我的服务的客户地址为: ', request.socket.remoteAddress);
	console.log('请求我的服务的客户端口号为: ', request.socket.remotePort);

	//客户端的请求路径
	var url = request.url;

	if (url === '/'){
		//发送HTTP头部
    	//HTTP状态：200:OK
    	//内容类型：text/html
		response.writeHead(200,{'Content-Type': 'text/html; charset=utf-8'});

		//发送响应数据
		response.write('<table style="background-color: #217bc4; color: #FFFFFF; width: 100%; min-width: 500px;"><tr><td align="left" bgcolor="#217bc4" style="padding: 10px 10px 20px 10px;"><table border="0"><tr><td><img src="https://www.tongji.edu.cn/images/logo.png" alt="Logo" width="240" height="80" style="display: block;"/></td><td style="padding: 0px 0px 0px 10px;"><img src="https://www.tongji.edu.cn/images/18/05/22/17r4j170f9/linian.png" alt="Logo" width="250" height="60" style="display: block;"/></td></tr></table></td></tr></table></br>');
		response.write("Node.js</br>");
    	response.write("Hello, the world of JavaScript!</br></br>");
    	response.write("<a href='/plain'>纯文本 plan</a></br>");
    	response.write("<a href='/html'>超文本 html</a></br>");
    	response.write("<a href='/image'>图片 image</a></br>");
    	response.write("<a href='/404'>404</a></br>");
    	//响应结束
    	response.end();

	} else if (url === '/plain'){
		//发送HTTP头部
    	//内容类型：text/plain
		response.setHeader('Content-Type', 'text/plain; charset=utf-8');

		var a = 2;
		var b = 5;
		//发送响应数据
		response.write("a="+a+"\n");
		response.write("b="+b+"\n");
		response.write("c=a*b="+(a*b)+"\n");
		//响应结束
		response.end();

	} else if (url === '/html'){
		//发送HTTP头部
		//内容类型：text/html
		response.setHeader('Content-Type', 'text/html; charset=utf-8');

		//发送响应数据
		response.write('<table style="background-color: #217bc4; color: #FFFFFF; width: 100%; min-width: 500px;"><tr><td align="left" bgcolor="#217bc4" style="padding: 10px 10px 20px 10px;"><table border="0"><tr><td><img src="https://www.tongji.edu.cn/images/logo.png" alt="Logo" width="240" height="80" style="display: block;"/></td><td style="padding: 0px 0px 0px 10px;"><img src="https://www.tongji.edu.cn/images/18/05/22/17r4j170f9/linian.png" alt="Logo" width="250" height="60" style="display: block;"/></td></tr></table></td></tr></table></br>');
		//响应结束
		response.end('hello, html!</br><a href="https://www.tongji.edu.cn">Tongji University</a>');

	} else if (url === '/image') {
    	//读取图片
	    fs.readFile('./tongji.png', function (err, data) {	//函数中调用了一个带两个参数的function函数
		    if (err) {
		    	//发送HTTP头部
				//内容类型：text/html
		        response.setHeader('Content-Type', 'text/plain; charset=utf-8')
		        //响应结束
		        response.end('文件读取失败，请稍后重试！')
		    } else {
		        // data 默认是二进制数据，可以通过 .toString 转为咱们能识别的字符串
		        // response.end() 支持两种数据类型，一种是二进制，一种是字符串
		        // 图片就不需要指定编码了，因为我们常说的编码一般指的是：字符编码

		        //发送HTTP头部
				//内容类型：image/png
		        response.setHeader('Content-Type', 'image/png')
		        //响应结束
		        response.end(data)
		    }
	    })
  	} else {
  		//发送HTTP头部
		//内容类型：text/html
  		response.setHeader('Content-Type', 'text/html; charset=utf-8');
		response.write('<table style="background-color: #217bc4; color: #FFFFFF; width: 100%; min-width: 500px;"><tr><td align="left" bgcolor="#217bc4" style="padding: 10px 10px 20px 10px;"><table border="0"><tr><td><img src="https://www.tongji.edu.cn/images/logo.png" alt="Logo" width="240" height="80" style="display: block;"/></td><td style="padding: 0px 0px 0px 10px;"><img src="https://www.tongji.edu.cn/images/18/05/22/17r4j170f9/linian.png" alt="Logo" width="250" height="60" style="display: block;"/></td></tr></table></td></tr></table></br>');
  		//响应结束
  		response.end('404 Not Found.');
  	}

}).listen(8888); //服务器在88888端口监听
//终端打印信息
console.log("Server running at http://127.0.0.1:8888/");











