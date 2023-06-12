<?php
print mb_convert_encoding('こんにちは、赤ちゃん！！', 'EUC-JP', 'UTF-8, SJIS, JIS');
// 文字化けで表示される。