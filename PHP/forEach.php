<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>PHP Variable Type</title>
</head>
<body>
<?php
	$arr = array(2, 4, 6, 8);
    foreach ($arr as $value) {
        echo "변수 \$value의 현재값은 {$value}입니다.<br>";
    }
    unset($value);
    echo "<br>";
    $arr = array(
        "둘" => 2,
        "넷" => 4,
        "여섯" => 6,
        "여덟" => 8,
    );
    foreach ($arr as $key => $value) {
        echo "배열 \$arr에서 키값 '{$key}'에 대한 값은 {$value}입니다.<br>";
    }
    unset($value);
        ?>
</body>
</html>
