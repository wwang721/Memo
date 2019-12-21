<meta charset="utf-8">
<?php  /*
*
* created by WW
* on Dec. 20, 2019
*
* 1. sudo apachectl start/stop/restart
* 2. browser -> http://localhost/*
*
*/

//插入 html 代码
echo '<table style="background-color: #217bc4; color: #FFFFFF; width: 100%; min-width: 500px;">
		<tr>
			<td align="left" bgcolor="#217bc4" style="padding: 10px 10px 20px 10px;">
				<table border="0">
					<tr>
						<td>
		   					<img src="https://www.tongji.edu.cn/images/logo.png" alt="Logo" width="240" height="80" style="display: block;"/>
		   				</td>
		   				<td style="padding: 0px 0px 0px 10px;">
		   					<img src="https://www.tongji.edu.cn/images/18/05/22/17r4j170f9/linian.png" alt="Logo" width="250" height="60" style="display: block;"/>
		   				</td>
		  			</tr>
		  		</table>
		  	</td>
		 </tr>
	</table>
	</br>';

//输出 hello， world!
echo "Hello, the world of PHP!</br>";
echo date('Y-m-d');

//简单计算
$a=1;
$b=2;
echo "</br></br>a=$a</br>b=$b</br>";

$c = $a + $b;
echo "c=a+b=$c</br></br>";

echo "连接 MySQL 数据库...</br>";
//定义常量参数
define('DB_HOST','127.0.0.1');//不用 localhost 而是 127.0.0.1
define('DB_USER','wwang');//用户名
define('DB_PWD','w1998w0721');//密码
define('DB_NAME', 'wwang');//数据库名称

$con = mysqli_connect(DB_HOST,DB_USER,DB_PWD) or die('mySQL 连接失败, 错误信息: '.mysqli_error());

if($con) {
	echo 'link successfully!</br></br>';
}else {
	echo 'error!</br></br>';
}

echo "用户名: ", DB_USER, "</br>";

mysqli_select_db($con, DB_NAME) or die('数据库连接错误，错误信息：'.mysqli_error());

echo "选择数据库 ", DB_NAME, ", database changed...</br>";

$query = "SELECT * FROM t_user";
$result = mysqli_query($con, $query) or die('SQL错误，错误信息：'.mysqli_error()); //执行SQL查询语句
echo "执行 $query ...</br>";
echo "结果: </br>";
print_r(mysqli_fetch_array($result, MYSQLI_ASSOC));	//mysqli_fetch_array() 一次只能输出一行结果
echo '</br>';
print_r(mysqli_fetch_array($result, MYSQLI_ASSOC));
echo '</br>';

// 释放结果集
mysqli_free_result($result);
mysqli_close($con);

?>







