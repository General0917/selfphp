<?php
require_once './MachineTrait.php';

class Fax {
    // MachineTraitトレイトをインポート
    // トレイトを利用する場合は、「use」命令を利用する
    use MachineTrait;

    // Faxを送信
    public function send() {
        print 'sending fax...sended!' . '<br />';
    }
}

$fx = new Fax();
$fx->run();
$fx->send();