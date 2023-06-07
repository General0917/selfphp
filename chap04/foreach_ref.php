<?php
$data = [102, 103, 105, 207, 303];

foreach ($data as &$value) {
    $value = 'GAT-X' . $value;
}

print_r($data);