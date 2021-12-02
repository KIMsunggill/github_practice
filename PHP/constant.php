<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		function magicCons() {
			echo "파일의 현재 줄 번호는 ". __LINE__. "이다.<br>";
			echo __LINE__;     // 파일의 현재 줄 번호를 반환함.
			echo "<br>";
			echo __FUNCTION__; // 함수의 이름을 반환함.
			echo "<br>";
			echo __METHOD__;   // 클래스의 메소드 이름을 반환함.
			echo "<br>";
			echo __DIR__; //파일의 디렉터리를 반환함.
	}
	magicCons();
	?>
</body>
</html>
