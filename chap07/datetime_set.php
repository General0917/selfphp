<?php
$now = new DateTime();
$now->setDate(2023, 6, 20);
$now->setTime(2, 8, 28);
// $now->setTime(2, 70, 28); // このフォーマットだと、3時10分28秒と時刻がセットされる。(60分以上を超えると丸められる。)
print $now->format('Y年m月d日 H:i:s');