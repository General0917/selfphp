<?php
// メールの構成情報の設定
$to = 'wings@example.com'; // 宛先
$subject = '独習PHP 改訂版'; // 件名
$body = "こんにちは、mb_send_mail関数！！\nどうですか？";
$headers = "From : user01@example.com\n";
$headers .= "Cc : yamada@example.com\n";
$headers .= "X-Mailer : PHP 8 \n"; // 以上、その他のヘッダ情報

if (mb_send_mail($to, $subject, $body, $headers)) { // メール送信
    print 'メール送信に成功しました。';
} else {
    print 'メール送信に失敗しました。';
}