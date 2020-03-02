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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <title>お問い合わせありがとうございます</title>
</head>
<body>
    <div class="mail">
        <div class="mail__inner">
            <?php
                mb_language("Japanese");
                mb_internal_encoding("UTF-8");
    
                $to = "tsunshi283@gmail.com";
                $mail = $_POST["mail"];
                $subject = "お問い合わせ種別:".$_POST["purpose"]; // 題名 
                $body = "お名前:".$_POST['name']. "\n";
                $body .="お住まい:".$_POST['area']. "\n";
                $body .="お問い合わせ内容:". $_POST["inquiry"]. "\n"; // 本文
                $header = "From: $mail\nReply-To:$mail\n";
            ?>

            <?php if(mb_send_mail($to, $subject, $body, $header)){ ?>
                <p class="sendMessage"><?php echo "お問い合わせありがとうございます。"?>
                <p class="sendMessage"><?php echo "3日営業日以内にご返信いたしますが、万が一返信がない場合は、"?>
                <p class="sendMessage"><?php echo "お手数ですが再度お問い合わせください。"?>
                <p class="sendMessage"><?php echo "お見積もりの場合は1週間程度お日にちをいただくことがございます。"?>
                <?php } else {
                    echo "メールの送信に失敗しました";
                };?>  
        </div>
        <a class="btn" href="index.php">トップへ戻る</a>
    </div>
</body>
</html>
