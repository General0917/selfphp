<?php
$data = ['和田', '杉山', '杉沼', '長田', '星山'];
mb_convert_variables('Shift-JIS', 'UTF-8, SJIS, JIS', $data);
print_r($data);