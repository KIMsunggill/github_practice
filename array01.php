<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>PHP Syntax</title>
</head>
<body>
    <?php
$arr = array();            // 배열의 생성
$arr[10] = "banana";       // 인덱스 10에만 배열 요소를 추가함.
$arr = array("apple", "banana", "orange");
echo "<br>";
foreach ($arr as $value) {
    echo "변수 \$value의 현재값은 {$value}입니다.<br>";
}
var_dump($arr[0]);         // NULL
echo "<br>";
var_dump(isset($arr[0]));  // false
echo "<br>";
var_dump(isset($arr[10])); // true

    ?>
    
</body>
</html>