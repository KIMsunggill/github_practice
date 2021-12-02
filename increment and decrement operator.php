<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>PHP Operators</title>
</head>

<body>

<?php
	$num_01 = 7;
	$num_02 = 7;

	echo "++\\$num_01 에 의한 결과값은 ".(++$num_01 - 5)."이고, 변수의 값은 {$num_01}로 변했습니다.<br>";
	echo "\\$num_02++ 에 의한 결과값은 ".($num_02++ - 5)."이고, 변수의 값은 {$num_02}로 변했습니다.";
?>

</body>

</html>