<!--출처: https://blog.naver.com/PostList.naver?blogId=bgpoilkj-->
<?php include $_SERVER["DOCUMENT_ROOT"] . "/KMOVE/db.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List_Page</title>
    <link rel="stylesheet" type="text/css" href="/KMOVE/css/style.css" />
</head>

<body>
    <div id="board_area">
        <h1>자유게시판</h1>
        <h4>자유롭게 글을 쓰는 게시판</h4>
        <table class="list-table">
            <thead>
                <tr>
                    <!--tr=table row. 가로줄을 만들자.-->
                    <th width="70">번호</th>
                    <th width="500">제목</th>
                    <th width="120">글쓴이</th>
                    <th width="100">작성일</th>
                    <th width="100">조회수</th>
                </tr>
            </thead>
            <!--여기서 thead가 끝났다. 이제 tbody를 만들 차례다.-->

            <?php
            // board테이블에서 idx를 기준으로 내림차순해서 5개까지 표시
            $sql = mq("select * from board order by idx desc limit 0,5");
            #32번 문장에서 from 대신 where를 넣어서 해맸다.
            while ($board = $sql->fetch_array()) {
                # while ($board=mysqli_fetch_array($sql)) 이렇게 해도 되더라, 개인 경험이라 틀릴 수도 있음.
                $title = $board["title"];
                if (strlen($title) > 30) {
                    $title = str_replace($board["title"], mb_substr($board["title"], 0, 30) . "...", $board["title"]);
                    //mb_substr: 文字列の一部を得る
                }
            ?>
                <tbody>
                    <tr>
                        <td width="70"><?php echo $board['idx']; ?></td>
                        <td width="500"><a href=""><?php echo $title; ?></a></td>
                        <!--바로 위의 문장을 몰라서 해멨다.-->
                        <td width="120"><?php echo $board['name'] ?></td>
                        <td width="100"><?php echo $board['date'] ?></td>
                        <td width="100"><?php echo $board['hit']; ?></td>
                    </tr>
                </tbody>
                <!--tbody와 바로 위의 php문장이랑 자리를 바꾸면 에러가 난다.-->
            <?php } ?>
        </table>
        <div id="write_btn">
            <a href="/KMOVE/page/board/write.php"><button>글쓰기</button></a>
        </div>
    </div>
</body>

</html>