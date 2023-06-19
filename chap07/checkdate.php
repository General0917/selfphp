<?php
// カレンダーをテキスト表示するcalender関数（引数$yearは年、$monthは月）
function calender($year, $month) {
    // 1 ~ 31までの間をループ処理
    for($i = 1; $i <= 31; $i++) {
        // 日付（$i）が該当月の妥当な月である場合のみ表示
        if (checkdate($month, $i, $year)) {
            print "{$i} &nbsp;";
        }
    }
}

print '2016年2月のカレンダー:';
calender(2016, 2);