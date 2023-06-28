<?php
// 抽象メソッドを使用した場合の記載
/*
require_once './Figure.php';

class Triangle extends Figure {
    // 三角形の面積を求めるためのgetAreaメソッドを定義
    public function getArea() : float {
        return ($this->width * $this->height) / 2;
    }
}
*/

require_once './IFigure.php';
require_once './Figure.php';

class Triangle implements IFigure {
// class Triangle extends Figure implements IFigure {
    // プロパティを定義
    public $width;
    public $height;

    // コンストラクタでプロパティを初期化
    public function __construct(float $width, float $height) {
        $this->width = $width;
        $this->height = $height;
        // parent::__construct($this->width, $this->height);
    }

    // IFigure::getAreaメソッドを実装
    public function getArea() : float {
        return ($this->width * $this->height) / 2;
    }
}