<?php
include $_SERVER['DOCUMENT_ROOT']."/KMOVE/db.php";

#rno은 댓글번호, bno는 게시글 번호
$rno = $_POST['rno']; 
$sql = mq("select * from reply where idx='".$rno."'");
$reply = $sql->fetch_array();
#  $sql 문으로 reply idx가 $rno와 같은 것을 찾고 $reply 변수에 fetch_array()로 값을 저장합니다.
$bno = $_POST['b_no'];
$sql2 = mq("select * from board where idx='".$bno."'");
$board = $sql2->fetch_array();
$sql3 = mq("update reply set content='".$_POST['content']."' where idx = '".$rno."'"); ?> <!--read.php에 있는 $sql3에 있는 내용을 update 한다.-->

<script type="text/javascript">alert('수정되었습니다.'); location.replace("read.php?idx=<?php echo $bno; ?>");</script>
?>