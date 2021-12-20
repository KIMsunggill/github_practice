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
</body>

</html>