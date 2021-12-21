<?php
include $_SERVER['DOCUMENT_ROOT']."/KMOVE/db.php";
#db.php를 갖고 온다.

$bno = $_GET['idx'];
#이거 GET으로 하나 POST로 하나 같더라.
#POST방식은 주소표시줄에 값이 노출되지 않고, GET방식은 주소표시줄에 값이 노출된다는 차이점이 있습니다.
#로그인 페이지와 같이 값이 노출되면 안되는 곳에서는 POST방식을 취하고, 일반 검색이나 게시판같은곳에서는 GET방식을 취하셔도 무방합니다.
#프로그래밍을 하는 입장에서도 GET방식을 취하여 값을 가져와야 하는 경우가 생기기도 합니다.
$username = $_POST['name'];
$userpw = password_hash($_POST['pw'], PASSWORD_DEFAULT);
$title = $_POST['title'];
$content = $_POST['content'];
$sql = mq("update board set name='".$username."',pw='".$userpw."',title='".$title."',content='".$content."' where idx='".$bno."'"); ?>
<!--where에 idx='".$bno."'"가 있다.-->

<script type="text/javascript">
    function load() {
        alert("수정됐습니다.");
        window.location.href = "/KMOVE/index_practice.php";
    }
</script>
<body onload="load()"></body>

<meta http-equiv="refresh" content="0 url=/page/board/read.php?idx=<?php echo $bno; ?>">