<!--참고 사이트: https://m.blog.naver.com/bgpoilkj/220759718278-->
<?php include $_SERVER['DOCUMENT_ROOT'] . "/KMOVE/db.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read_Page</title>
    <link rel="stylesheet" type="text/css" href="/KMOVE/css/style.css" />
</head>

<body>
    <?php
    $bno = $_GET['idx'];
    #이거 $_POST하니깐 안 되더라.
    $hit = mysqli_fetch_array(mq("select * from board where idx ='" . $bno . "'"));
    #'" . $bno . "'")); 이부분을 잘 모르겠다. 
    $hit = $hit['hit'] + 1;
    $fet = mq("update board set hit= '" . $hit . "' where idx= '" . $bno . "' ");
    $sql = mq("select * from board where idx='" . $bno . "'"); /* 받아온 idx값을 선택 */
    $board = $sql->fetch_array();
    ?>

    <!-- 글 불러오기 -->
    <div id="board_read">
        <h2><?php echo $board['title']; ?></h2>
        <div id="user_info">
            <?php echo $board['name']; ?>&emsp;<?php echo $board['date']; ?>&emsp; 조회: <?php echo $board['hit']; ?>
            <!--PHP 문장이 셋이나 있다. 기능을 수행해야 할 게 셋이나 있으니깐.-->
            <!--&emsp; 공백 4개. &ensp 공백 2개. &nbsp; 공백 1개.-->
            <div id="bo_line"></div>
        </div>
        <div id="bo_content">
            <?php echo nl2br("$board[content]"); ?>
            <!--nl2br — 改行文字の前に HTML の改行タグを挿入する
                형식, 구조: string nl2br ( string $string [, bool $is_xhtml ] )-->
        </div>

        <!-- 목록, 수정, 삭제 -->
        <!-- 수정, 삭제는 아직 안 했음 -->
        <div id="bo_ser">
            <ul>
                <li><a href="/KMOVE/index_practice.php">[목록으로]</a></li>
                <li><a href="modify.php?idx=<?php echo $board['idx']; ?>">[수정]</a></li>
                <li><a href="delete.php?idx=<?php echo $board['idx']; ?>">[삭제]</a></li>
                </ul>
	</div>
</div>
<!--- 댓글 불러오기 -->
<div class="reply_view">
	<h3>댓글목록</h3>
		<?php
			$sql3 = mq("select * from reply where con_num='".$bno."' order by idx desc");
			while($reply = $sql3->fetch_array()){ 
		?>
		<div class="dap_lo">
			<div><b><?php echo $reply['name'];?></b></div>
			<div class="dap_to comt_edit"><?php echo nl2br("$reply[content]"); ?></div>
			<div class="rep_me dap_to"><?php echo $reply['date']; ?></div>
			<div class="rep_me rep_menu">
				<a class="dat_edit_bt" href="#">수정</a>
				<a class="dat_delete_bt" href="#">삭제</a>
			</div>
			<!-- 댓글 수정 폼 dialog -->
			<div class="dat_edit">
				<form method="post" action="rep_modify_ok.php">
					<input type="hidden" name="rno" value="<?php echo $reply['idx']; ?>" /><input type="hidden" name="b_no" value="<?php echo $bno; ?>">
					<input type="password" name="pw" class="dap_sm" placeholder="비밀번호" />
					<textarea name="content" class="dap_edit_t"><?php echo $reply['content']; ?></textarea>
					<input type="submit" value="수정하기" class="re_mo_bt">
				</form>
			</div>
			<!-- 댓글 삭제 비밀번호 확인 -->
			<div class='dat_delete'>
				<form action="reply_delete.php" method="post">
					<input type="hidden" name="rno" value="<?php echo $reply['idx']; ?>" /><input type="hidden" name="b_no" value="<?php echo $bno; ?>">
			 		<p>비밀번호<input type="password" name="pw" /> <input type="submit" value="확인"></p>
				 </form>
			</div>
		</div>
	<?php } ?>

	<!--- 댓글 입력 폼 -->
	<div class="dap_ins">
		<form action="reply_ok.php?idx=<?php echo $bno; ?>" method="post">
			<input type="text" name="dat_user" id="dat_user" class="dat_user" size="15" placeholder="아이디">
			<input type="password" name="dat_pw" id="dat_pw" class="dat_pw" size="15" placeholder="비밀번호">
			<div style="margin-top:10px; ">
				<textarea name="content" class="reply_content" id="re_content" ></textarea>
				<button id="rep_bt" class="re_bt">댓글</button>
			</div>
		</form>
	</div>
</div><!--- 댓글 불러오기 끝 -->
<div id="foot_box"></div>
</div>
</body>
</html>