<?php
$date = '2016年12月04日';
$format = 'Y年d月m日';

$date_format = DateTime::createFromFormat($format, $date);

print $date_format->format('Y/d/m (D)');