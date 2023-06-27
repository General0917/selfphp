<?php

class MySample {
    public function __destruct() {
        print '<p>'.__CLASS__.'オブジェクトが破棄されました。</p>';
    }
}

$p = new MySample();