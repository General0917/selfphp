<?php
// 抽象メソッドを含むクラスには、classキーワードの前にabstruct修飾子を付与する必要がある。
abstract class Figure {
    protected $width;
    protected $height;
    // クラスの初期化を行うコンストラクタの名前は、__destructではなく、「__construct」である。
    // public function __destruct($width, $height) {
    //     $this->width = $width;
    //     $this->height = $height;
    // }
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
    protected abstract function getArea();
}

// クラスを継承する際には、implementsキーワードではなく、「extends」キーワードを使用する。
// class Triangle implements Figure {
class Triangle extends Figure {
    public final function getArea() {
        return ($this->width * $this->height) / 2;
    }
}

// クラスを継承する際には、implementsキーワードではなく、「extends」キーワードを使用する。
// class Square implements Figure {
class Square extends Figure {
    public final function getArea() {
        return ($this->width * $this->height);
    }
}

$tri = new Triangle(10, 5);
$sqr = new Square(10, 5);

// インスタンスメソッドは「::」演算子ではなく、「->」演算子を呼び出す。
// print "三角形の面積は{$tri::getArea()}です。<br />";
// print "四角形の面積は{$sqr::getArea()}です。";
print "三角形の面積は{$tri->getArea()}です。<br />";
print "四角形の面積は{$sqr->getArea()}です。";