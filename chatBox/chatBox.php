<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-replace-svg="nest"></script>
    <script src="chatbox.js"></script>
    <link rel="stylesheet" href="chatbox.css">
</head>
<body>
    <?php
        $sv = "localhost";
        $us = "root";
        $pw = "";
        $db = "website_dulich";
        $conn = new mysqli($sv, $us, $pw, $db);
        $sql = "select * from message where id = 01";
        $kq = $conn->query($sql);
         /* if($kq->num_rows > 0) {
                while ($row = $kq->fetch_assoc()) {
                    echo "<p class=\"showChatBox__main--content\">".$row["TEXT"]."</p>";
                }
            } */
    ?>
    <div class="chatting__positioning">
    <div id="showChatBox">
        <header class="showChatBox__tittle">
            <div class="showChatBox__tittle--avt">
                <img class="showChatBox__tittle--pic" src="default-avatar.png">
                <img class="showChatBox__tittle--pic" src="default-avatar.png">
            </div>
            <div class="showChatBox__tittle--content">
                <p class="showChatBox__tittle--hello">Kính chào quý khách</p>
                <div class="showChatBox__tittle--status">
                    <div class="showChatBox__tittle--status--circle">
                    </div>
                    <p>Tư vấn dịch vụ</p>
                </div>
            </div>
            <i class="fas fa-ellipsis-v"></i>
            <i class="fas fa-angle-down" onclick="hideChatBox()"></i>
        </header>
        <main class="showChatBox__main">
            <?php
                while ($row = $kq->fetch_assoc()) { ?>
                <p class="showChatBox__main--content"> <?php echo $row["TEXT"]; ?> </p>
            <?php } ?>
            <p class="showChatBox__main--status">Vừa xong</p>
        </main>
        <form action="chatBox.php" method="post" class="showChatBox__footer">
            <input class="showChatBox__footer--texting" type="text" placeholder="Đặt câu hỏi tại đây!" name="ChatContent">
            <div class="showChatBox__footer--icon">
                <i class="far fa-grin"></i>
                <input class="showChatBox__footer--icon--submit" type="submit" name="ChatSubmit" value="">
            </div>
        </form>
    </div>
    <form action="chatBox.php"method="post" id="chatbox_wapper" onclick="showChatBox()">
        <input type="submit" name="open_chatbox" value = "">
        <i class="fas fa-comment"></i>
        <p>Trò chuyện</p>
    </form>
    </div>
</body>
</html>