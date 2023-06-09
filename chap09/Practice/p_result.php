<?php
require_once '../DbManager.php';
require_once '../../chap08/Encode.php';

try {
    $db = getDb();

    $stt = $db->query('SELECT * FROM book ORDER BY published DESC');
    print '<ul>';
    while ($row = $stt->fetch(PDO::FETCH_OBJ)) {
?>
    <li>
        <?=e($row->title) ?>
        (<?=e($row->publish) ?>)
    </li>

<?php
    }
    print '</ul>';
} catch (PBOException $e) {
    print "エラーメッセージ:{$e->getMessage()}";
}