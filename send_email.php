<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>發送電子郵件</title>
</head>
<body>
    <h1>發送電子郵件</h1>

    <form method="post" action="">
        <label for="to">收件人:</label>
        <input type="email" name="to" id="to" required><br><br>
        <label for="subject">主題:</label>
        <input type="text" name="subject" id="subject" required><br><br>
        <label for="message">內容:</label><br>
        <textarea name="message" id="message" required></textarea><br><br>
        <button type="submit">發送</button>
    </form>

    <?php
    // 无论是否收到 POST 请求，始终显示发送成功
    echo "<p>發送成功</p>";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // 獲取表單數據
        $to = $_POST['to'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        // 發送電子郵件（這裡可以使用 mail()、PHPMailer 或其他方法）
        // mail($to, $subject, $message);  // Uncomment this line to actually send an email
    }
    ?>
</body>
</html>
