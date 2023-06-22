<?php
$data = new DateTime();

print $data->format('Y年m月d日') . '<br />'; // 現在の日付を表示する
print $data->format('Y年m月t日') . '<br />'; // 現在の月の最終日を表示する
$data->add(new DateInterval('P1M10D')); // 現在の日付から1ヶ月10日後の日付を表示する
print $data->format('Y年m月d日');