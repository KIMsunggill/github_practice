<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<title>PHP Array</title>
</head>

<body>

<?php
	$arr = array(
		array(
			array("apple", "korea", 1000),
			array("banana", "philippines", 2000),
			array("orange", "us", 1500)
		),
		array(
			array("carrot", "vietnam", 500),
			array("cucumber", "korea", 1000),
			array("pumpkin", "china", 2000)
		)
	);

	for($layer = 0; $layer < count($arr); $layer++){
		for($row = 0; $row < count($arr[$layer]); $row++) {
			for($column = 0; $column < 3; $column++){
				echo $arr[$layer][$row][$column].", ";
			}
			echo "<br>";
		}
		echo "<br>";
	}
?>

</body>

</html>