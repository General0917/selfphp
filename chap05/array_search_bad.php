<?php
$data = ['PHP', '' => 'JavaScript', 'PHP', 'Java', 'C#', '15'];
// if (!array_search('PHP', $data)) {
//     print '見つかりませんでした。';
// }

// if (array_search('PHP', $data) === false) {
//     print '見つかりませんでした。';
// }

if (!in_array($data[0], $data)) {
    print "{$data[0]}が見つかりました。" . '<br />';
} else {
    print "{$data[0]}が見つかりませんでした。" . '<br />';
}

print in_array('PHP', $data);