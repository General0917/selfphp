<?php
// MachineTraitトレイトを定義

/*
traitブロック配下の構文は、ほぼclassブロックのそれに準じる。ただし、以下の制約がある。
- 定数は持てない（プロパティ、抽象/静的/インスタンスメソッドのみ可能）
- クラスの継承、インターフェイスの実装はできない
*/

trait MachineTrait {
    private $starting = 'Starting..Run!';

    // 機器を起動
    public function run() {
        print $this->starting . '<br />';
    }
}