<?php
$mail_address = $_POST['from'] ?? 'yamada@example.com';

if (!preg_match('/\A\w+([-+.\']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*\z/i', $mail_address)) {
    die('不正なメールアドレスです。');
}

mb_send_mail('wings@example.com', $_POST['subject'], $_POST['body'], "From: {$mail_address}");
print 'メールが送信されました。';