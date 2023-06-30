<?php
require_once './MyMail.php';

$m = new MyMail();

// 必須のプロパティを設定
$m->to = 'shu8780@gmail.com';
$m->subject = 'テストメール';
$m->message = 'こんにちは、MyMailクラスです。';

// 任意のプロパティを設定（ハイフンは全てアンダースコアで指定すること）
$m->From = 'admin@example.com';
$m->X_Mailer = 'MyMail 1.0';
$m->X_Priority = 1;
$m->X_MSMail_Priority = 'High';

// メールを送信
$m->send();