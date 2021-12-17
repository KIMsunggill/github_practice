<!-- test_table 의 레코드 중 seq 가 4 이하인 레코드를 select 구문으로 조회하고 그 결과인 리절트 셋에 대해 mysqli_fetch_array 와 while 문을 이용하여 출력하시오. -->
<!--문제 출처:
https://m.blog.naver.com/diceworld/220295811114-->

<?php
$conn = mysqli_connect('localhost', 'root', '1234', 'test_db');
$select_query = "SELECT * FROM test_table WHERE seq<=4";
$result_set=mysqli_query($conn, $select_query);

while ($row=mysqli_fetch_array($result_set)) {
    print_r($row);
    echo "<br>";
}
mysqli_close($conn)
?>