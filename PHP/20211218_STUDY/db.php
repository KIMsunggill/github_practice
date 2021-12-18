<!--출처: https://blog.naver.com/PostList.naver?blogId=bgpoilkj-->
<?php

header('Content-Type: text/html; charset=utf-8');// utf-8인코딩

$db = new mysqli("localhost", "root", "1234", "db_name1");
$db -> set_charset("utf-8"); //메소드라서 ->을 써야하나봐.

function mq($sql)
{
	global $db;
	return $db->query($sql);
}

?>