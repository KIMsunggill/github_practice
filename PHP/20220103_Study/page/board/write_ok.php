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
//$_POST: Super global variables are built-in variables that are always available in all scopes.
//php에서 다른 php 파일에 POST 방식으로 데이터를 넘기고 받을 때 사용

if(isset($_POST['lockpost'])){
	$lo_post = '1';
}else{
	$lo_post = '0';
}

if($username && $userpw && $title && $content){
    $sql=mq("insert into board(name,pw,title,content,date,lock_post) values('".$username."','".$userpw."','".$title."','".$content."','".$date."','".$lo_post."')");
    #  $변수=mq()으로 sql문장을 입력할 수 있다.
    echo"<script>
    alert('글쓰기가 완료됐습니다.');
    location.href='/KMOVE/index_practice.php';</script>";
} else {
    echo "<script>
    alert('글쓰기에 실패했습니다.');
    location.href='/KMOVE/index_practice.php';</script>";
}
?>