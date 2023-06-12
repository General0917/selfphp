<?php
$data = 'リオとニンザブロウとナミとリンリン';
print_r(explode('と', $data));
print '<br />';
print_r(explode('や', $data));
print '<br />';
print_r(explode('と', $data, 2));
print '<br />';
print_r(explode('と', $data, -1));