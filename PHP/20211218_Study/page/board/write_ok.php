<!--출처: https://blog.naver.com/PostList.naver?blogId=bgpoilkj-->
<?php

include $_SERVER["DOCUMENT_ROOT"]."/KMOVE/db.php";

//각 변수에 write.php에서 input name값들을 저장한다
$username = $_POST['name'];
$userpw = password_hash($_POST["pw"], PASSWORD_DEFAULT);
#비밀번호라서 그런지 뭐가 많다. 2021년 12월 18일 기점, 아직은 모르겠다. 나중에 알아보자.
$title = $_POST["title"];
$content = $_POST["content"];
$date = date("Y-m-d");
//$date에는 date 메서드를 썼다.

if($username && $userpw && $title && $content){
    $sql = mq("insert into board(name,pw,title,content,date) values('".$username."','".$userpw."','".$title."','".$content."','".$date."')");
    #  $변수=mq()으로 sql문장을 입력할 수 있다.
    echo "<script>
    alert('글쓰기가 완료 됐습니다.');
    location.href='/KMOVE/index_practice.php';</script>";
} else {
    echo "<script>
    alert('글쓰기에 실패했습니다.');
    location.href='/KMOVE/index_practice.php';</script>";
}
?>