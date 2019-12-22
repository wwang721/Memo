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

// 插入 html 代码
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



// 输出 hello， world!
echo "Hello, the world of PHP!</br>";
echo date('Y-m-d');



// 简单计算
echo "</br></br>简单计算:</br>";
$a=1;
$b=2;
echo "a=$a</br>b=$b</br>";

$c = $a + $b;
echo "c=a+b=$c</br></br>";



/*
* MySQL 数据库使用
*/
echo "连接 MySQL 数据库...</br>";
//定义常量参数
define('DB_HOST','127.0.0.1');	// 不用 localhost 而是 127.0.0.1
define('DB_USER','wwang');	// 用户名
define('DB_PWD','w1998w0721');	// 密码
define('DB_NAME', 'wwang');	// 数据库名称
define('TB_NAME', 'table_users');	// 数据表名称

// 连接 MySQL 数据库
$con = mysqli_connect(DB_HOST,DB_USER,DB_PWD) or die('mySQL 连接失败, 错误信息: '.mysqli_error());

if($con) {
	echo 'Link successfully!</br></br>';
}else {
	echo 'Error!</br></br>';
}

echo "用户名: ", DB_USER, "</br>";

// 选择数据库
mysqli_select_db($con, DB_NAME) or die('数据库连接错误，错误信息：'.mysqli_error());

echo "选择数据库: USE ", DB_NAME, "; MySQL --> Database changed ...</br></br>";


$query = "SELECT * FROM " . TB_NAME;
$result = mysqli_query($con, $query) or die('SQL错误，错误信息：'.mysqli_error()); // 执行SQL查询语句
echo "执行: $query </br>";
echo "结果: </br>";

while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { // mysqli_fetch_array() 一次只能输出一行结果
	print_r($row);	
	echo '</br>';
}

$result = mysqli_query($con, $query) or die('SQL错误，错误信息：'.mysqli_error()); // 执行SQL查询语句

print_r("以表格形式展示:</br>");

$array=array();

while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
       
       $count += 1;
       array_push($array, $row);
	   // $array 此时是一个包含所有记录的二维数组;
}    


print_r("数组维度: ");
echo count($array)."*".count($array[0])."</br>";	// 获取数组维度


$i = 0;
print_r("# | ");
while ($i < count($array[0])) {

		print_r(array_keys($array[0])[$i]." | ");	// 获得所有键名并输出
		$i += 1;
}
print_r("</br>");


$i = 0;
while ($i < count($array)) {

	$j = 0;
	print_r(($i+1)." | ");

	while ($j < count($array[$i])) {

		print_r($array[$i][array_keys($array[$i])[$j]]." | ");	// 输出所有键值
		$j += 1;

	}

	print_r("</br>");
	$i += 1;
}
print_r("</br>");


$query = "SELECT user_name FROM " . TB_NAME;
$result = mysqli_query($con, $query) or die('SQL错误，错误信息：'.mysqli_error()); // 执行SQL查询语句
echo "执行: $query </br>";
echo "结果: </br>";

while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { // mysqli_fetch_array() 一次只能输出一行结果
	print_r($row);	
	echo '</br>';
}
echo "</br>";


$query = "SELECT Count(user_name) AS total_user_number FROM " . TB_NAME;
$result = mysqli_query($con, $query) or die('SQL错误，错误信息：'.mysqli_error()); // 执行SQL查询语句
echo "执行: $query </br>";
echo "结果: </br>";
print_r(mysqli_fetch_array($result, MYSQLI_ASSOC));	// mysqli_fetch_array() 一次只能输出一行结果
echo '</br></br>';


$query = "SELECT user_name, password, phone FROM " . TB_NAME . " WHERE user_type <> 'root'";
$result = mysqli_query($con, $query) or die('SQL错误，错误信息：'.mysqli_error()); // 执行SQL查询语句
echo "执行: $query </br>";
echo "结果: </br>";
print_r(mysqli_fetch_array($result, MYSQLI_ASSOC));	// mysqli_fetch_array() 一次只能输出一行结果
echo '</br></br>';


// 释放结果集
mysqli_free_result($result);
mysqli_close($con);

echo "MySQL 测试成功!</br></br>"

?>







