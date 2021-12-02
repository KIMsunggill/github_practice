<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>PHP Variable Type</title>
</head>
<body>
<?php
	$var = 10;			// 전역 변수로 선언함
	function varFunc()
	{   static $cnt = 0;
        #지역변수
        $localVar = 0;
        $cnt++;
        $localVar++;
        echo "변수 cnt는 {$cnt}이다.<br>";
        echo "변수 localVar은 {$localVar}이다.<br>";

    }
    varFunc();varFunc();varFunc();varFunc();varFunc();
        ?>
</body>
</html>