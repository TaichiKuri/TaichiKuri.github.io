<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // フォームから送信されたデータを取得
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // データの確認（例: コンソールに出力）
    error_log("Name: $name, Email: $email, Message: $message");

    // メールで送信する場合
    $to = "taichi1898@gmail.com"; // 受信するメールアドレス
    $subject = "お問い合わせフォームからのメッセージ";
    $body = "お名前: $name\nメールアドレス: $email\nメッセージ:\n$message";

    // メール送信（サーバーがメール送信をサポートしている必要があります）
    if (mail($to, $subject, $body)) {
        echo "メッセージが送信されました。";
    } else {
        echo "メッセージの送信に失敗しました。";
    }
}
?>
