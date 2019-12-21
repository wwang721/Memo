<?php /*
*
* created by WW
* on Dec. 21, 2019
*
* 1. sudo apachectl start/stop/restart
* 2. browser -> http://localhost/*
*
*/


if( $_GET["username"] == "wwang" ){ //获取用户名

	if ( $_GET["password"] == "w1998w0721" ){	//获取密码

		echo '<body><div id="app"></div><script src="/dist/dist_s/build.js"></script></body><h1 style="-webkit-font-smoothing: antialiased;-moz-osx-font-smoothing: grayscale;text-align:center;color: #2c3e50;margin-top: -110px;font-family: \'Avenir\', Helvetica, Arial, sans-serif;font-weight: normal;">Log in Successfully!</h1>';

		echo '<h1 style="-webkit-font-smoothing: antialiased;-moz-osx-font-smoothing: grayscale;text-align:center;color: #2c3e50;margin-top: 0px;font-family: \'Avenir\', Helvetica, Arial, sans-serif;font-weight: normal;">Please Click the Author\'s Name Above to Enter in.</h1>';
	
	} else {
		
		echo '<body><div id="app"></div><script src="/dist/dist_f/build.js"></script></body><h1 style="-webkit-font-smoothing: antialiased;-moz-osx-font-smoothing: grayscale;text-align:center;color: #2c3e50;margin-top: -110px;font-family: \'Avenir\', Helvetica, Arial, sans-serif;font-weight: normal;">Password Error!</h1>';

	}

} else {

	echo '<body><div id="app"></div><script src="/dist/dist_f/build.js"></script></body><h1 style="-webkit-font-smoothing: antialiased;-moz-osx-font-smoothing: grayscale;text-align:center;color: #2c3e50;margin-top: -110px;font-family: \'Avenir\', Helvetica, Arial, sans-serif;font-weight: normal;">Username Not Found!</h1>';

}     


?>