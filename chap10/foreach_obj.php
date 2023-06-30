<?php
require_once './MyClass.php';

$cls = new MyClass();

// MyClassオブジェクトのプロパティをリスト表示
// publicプロパティのみ表示される
foreach ($cls as $key => $value) {
    print "{$key}：{$value} <br />";
}

print '<hr />';

// MyClassオブジェクトのプロパティをリスト表示（showPropertyメソッド経由）
// 全てのプロパティ（フィールドが表示される）
$cls->showProperty();

// オブジェクトを配列にキャストすることで、オブジェクトのプロパティに対して連装配列のようにアクセスすることも可能
// print '<br /';
// $ary = (array)$cls;
// print_r($ary);
// print '<br />';
// print $ary['pub'];