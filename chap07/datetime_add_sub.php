<?php
$dt = new DateTime();
print $dt->format('Y年m月d日 H時i分');

print '<br />';

$dt->add(new DateInterval('P1YT10H'));
print $dt->format('Y年m月d日 H時i分');

print '<br />';

$dt->sub(new DateInterval('P3MT20M'));
print $dt->format('Y年m月d日 H時i分');