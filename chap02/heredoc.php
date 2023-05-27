<?php
$str = 'PHP（PHP:Hypertext Preprocessor）';
$msg = <<<EOD
{$str}は、サーバサイドで動作する簡易なスクリプト言語です。
まずは、本書でじっくり基礎を固めましょう。<br />
"Let's start, everyone!!"
EOD;

/*
$msg = <<<'EOD'
{$str}は、サーバサイドで動作する簡易なスクリプト言語です。
まずは、本書でじっくり基礎を固めましょう。<br />
"Let's start, everyone!!"
EOD;
*/

print $msg;