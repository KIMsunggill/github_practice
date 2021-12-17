<!--  test_table 의 모든 레코드를 select 구문으로 조회하고 그 결과인 리절트 셋에 대해 mysqli_fetch_array를 1회 실행한 후 그 결과를 출력하시오. -->
<!--문제 출처:
https://m.blog.naver.com/diceworld/220295811114-->

<?php

$conn = mysqli_connect("localhost", "root", "1234", "test_db");
#일단 SQL과 연결
$select_query="SELECT seq, name from test_table";
$result_set=mysqli_query($conn,$select_query);
$row = mysqli_fetch_array($result_set);
print_r ($row);
echo '<br>';
mysqli_close($conn);
?>