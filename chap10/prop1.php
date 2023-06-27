<?php
require_once './Person2.php';

$p = new Person2();

$lastName = $p->lastName = '山田';
$firstName = $p->firstName = '太郎';

print "<p>僕の名前は{$lastName}{$firstName}です。</p>";