<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = 'a0907245996@gmail.com'; // 收件人邮箱
    $subject = '來自網站的聯絡訊息';
    $body = "姓名: $name\n電子郵件: $email\n訊息:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "訊息已發送！";
    } else {
        echo "發送訊息時發生錯誤。";
    }
}
?>
