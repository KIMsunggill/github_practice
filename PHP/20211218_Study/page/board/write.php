<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Writing_Page</title>
    <link rel="stylesheet" type="text/css" href="/KMOVE/css/style.css" />
</head>

<body>
    <div id="board_write">
        <h1><a href="/">자유게시판</a></h1>
        <h4>글을 작성하는 공간입니다.</h4>
        <div id="write_area">
            <form action="write_ok.php" method="post">
                <div id="in_title">
                    <textarea name="title" id="utitle" rows="1" cols="55" placeholder="제목" maxlength="100" required></textarea>
                    <!--rows="1"는 1줄, cols="55"는 55字를 넘기면 다음줄로 넘어감을 뜻함-->
                    <!--이렇게 다음줄로 넘기니깐 앞줄에 썼던 게 안 보이더라-->
                    <!--다른 웹사이트도 안 넘어가긴 마찬가진데, 다음줄로 넘어가게 하진 않았더라-->
                </div>
                <div class="wi_line"></div>
                <div id="in_name">
                    <textarea name="name" id="uname" rows="1" cols="55" placeholder="글쓴이" maxlength="100" required></textarea>
                </div>
                <div class="wi_line"></div>
                <div id="in_content">
                    <textarea name="content" id="ucontent" placeholder="내용" required></textarea>
                </div>
                <div id="in_pw">
                    <input type="password" name="pw" id="upw" placeholder="비밀번호" required />
                </div>
                <!--id="in_XX"에서 XX에 따라 입력란이 달라진다.-->
                <div class="bt_se">
                    <button type="submit">글 작성</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
