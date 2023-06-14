<?php
$str = 'PHPはPHP:Hypertext Preprocessorの略です';

print mb_strrpos($str, 'PHP') + 1 . '文字目';