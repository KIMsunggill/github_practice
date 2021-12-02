<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>PHP Syntax</title>
</head>
<body>
    <?php
$arr = array(); // 배열의 생성 
$arr[0] = "ginger";
$arr[1] = "watermelon";
$arr[2] = "apple";
$arr[3] = "banana";
$arr[4] = "orange";
$arr[5] = "melon";
$arr[6] = "tomato";
$arr[7] = "berry";
// $arr[0]과 $arr[1]은 배열의 홀(hole)이 됨.

for ($i = 0; $i < count($arr); $i++) {
    echo "\$arr[{$i}] : ".$arr[$i]."<br>";
}

echo "<br>";

foreach ($arr as $element){
    echo $element."<br>";
}
    ?>
    
</body>
</html>
