<?php
require_once './BusinessPerson.php';

class EliteBusinessPerson extends BusinessPerson {
    // サブクラス（子クラス）内で再定義
    // サブクラス（子クラス）ではオーバライド（メソッドが上書きされてしまう）
    public function work() {
        print "<p>{$this->firstName}{$this->lastName}はバリバリ働いています。</p>";
    }
}