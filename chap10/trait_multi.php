<?php
// 型を定義

use PrinterTrait as GlobalPrinterTrait;

interface IFax {
    function send();
}

interface IPrinter {
    function print();
}

// 実装を定義
trait FaxTrait {
    public function send() {
        print 'sending Fax...sended!' . '<br />';
    }
}

trait PrinterTrait {
    public function print() {
        print 'printing..completed!' . '<br />';
    }
}

// 複合機クラスの定義
class FaxPrinter implements IFax, IPrinter {
    use FaxTrait, GlobalPrinterTrait;
}

$fp = new FaxPrinter();

$fp->send();
$fp->print();