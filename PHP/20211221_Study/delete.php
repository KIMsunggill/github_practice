<?php
include $_SERVER['DOCUMENT_ROOT'] . "/KMOVE/db.php";
#db.php 연결.

$bno = $_GET['idx'];
#idx를 받아옴.
$sql = mq("delete from board where idx='$bno';");
#idx='$bno'의 값을 delete한다.
?>

<script type="text/javascript">
    function load() {
        alert("수정됐습니다.");
        window.location.href = "/KMOVE/index_practice.php";
    }
</script>
<body onload="load()"></body>
<!--자바스크립트를 이용한 하이퍼링크-->
<!--echo "<script>
    print('');
    location.href='/KMOVE1/index_list.php';</script>";
php에서는 이렇게 하면 알아서 하이퍼링크로 넘어간다.-->
<meta http-dquiv="refresh" content="0 url=/" />
<!--마지막 줄에 대해서 잘 모르겠다.-->
