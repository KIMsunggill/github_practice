<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<?php $var = 5; ?>
<?php if ($var > 6): ?>
변수의 값은 6보다 큽니다.   <!-- 이 부분은 HTML 구문임 -->
<?php elseif ($var == 6): ?>
변수의 값은 6입니다.        <!-- 이 부분은 HTML 구문임 -->
<?php elseif ($var < 6): ?>
변수의 값은 6보다 작습니다. <!-- 이 부분은 HTML 구문임 -->
<?php endif; ?>
</body>
</html>