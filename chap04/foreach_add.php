<?php
$data = [102, 103, 105, 207, 303];

foreach ($data as &$value) {
    var_dump($value);
    if ($value === 105) {
        $data[] = 131;
    }
}