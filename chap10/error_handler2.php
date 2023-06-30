<?php
// int型の引数を受け取るhoge関数
function hoge(int $x) {}

try {
    // わざと間違った型の引数を渡す（エラー）
    hoge('xxxx');
} catch (Exception $e) {
    print "例外：{$e->getMessage()}";
} catch (Error $e) {
    print "エラー：{$e->getMessage()}";
}