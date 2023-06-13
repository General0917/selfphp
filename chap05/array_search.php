<?php
$data = ['PHP', 'JavaScript', 'PHP', 'Java', 'C#', '15'];
var_dump(array_search('JavaScript', $data));
print '<br >';
var_dump(array_search('PHP', $data));
print '<br >';
var_dump(array_search('JAVA', $data));
print '<br >';
var_dump(array_search(15, $data));
print '<br >';
var_dump(array_search(15, $data, true));