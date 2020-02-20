<?php

//$_POSTで受け取る
$mail = $_POST['mail'];
$subject = $_POST['purpose'];
$body = $_POST['inquiry'];
$area = $_POST['area'];
$name = $_POST['name'];

?>


<!DOCTYPE html>
<html lang="ja">
<head>
<link rel="stylesheet" href="/css/style.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>お問い合わせ内容の確認</title>
</head>
<body>
    <div class="confirmation">
    <h2 class="confirmation-head">お問い合わせ内容</h2>
    <form action="mail.php" method="post">
        <input type="hidden" name="mail" value="<?php echo $mail; ?>">
        <input type="hidden" name="purpose" value="<?php echo $subject; ?>">
        <input type="hidden" name="inquiry" value="<?php echo $body; ?>">
        <input type="hidden" name="name" value="<?php echo $name; ?>">
        <input type="hidden" name="area" value="<?php echo $area; ?>">

        <div class="confirmation__item">
            <p class="confirmation__item-title">お名前</p>
            <p class="confirmation__item-inner"><?php if (isset($_POST["name"])) {echo $_POST["name"];} ?></p>
        </div>
        <div class="confirmation__item">
            <p class="confirmation__item-title">メールアドレス</p>
            <p class="confirmation__item-inner"><?php if (isset($_POST["mail"])) {echo $_POST["mail"];} ?></p>
        </div>
        <div class="confirmation__item">
            <p class="confirmation__item-title">都道府県</p>
            <p class="confirmation__item-inner"><?php if (isset($_POST["area"])) {echo $_POST["area"];} ?></p>
        </div>
        <div class="confirmation__item">
            <p class="confirmation__item-title">お問い合わせ内容</p>
            <p class="confirmation__item-inner"><?php if (isset($_POST["purpose"])) {echo $_POST["purpose"];} ?></p>
        </div>
        <div class="confirmation__item">
            <p class="confirmation__item-title">お問い合わせ本文</p>
            <p class="confirmation__item-inner"><?php if (isset($_POST["inquiry"])) {echo $_POST["inquiry"];} ?></p>
        </div>
        <input class="contact-btn-submit" type="submit" name="send" value="送   信">
        <a class="btn" href="index.php">トップへ戻る</a>

        </div>
    </form>
    
</body>
</html>
