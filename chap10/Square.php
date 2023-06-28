<?php
// 抽象メソッドを使用した場合の記載
/*
require_once './Figure.php';

class Square extends Figure {
    // 四角形の面積を求めるためのgetAreaメソッドを定義
    public function getArea() : float {
        return $this->width * $this->height;
    }
}
*/

require_once './IFigure.php';
require_once './Figure.php';

class Square implements IFigure {
// class Square extends Figure implements IFigure {
    public $width;
    public $height;

    public function __construct(float $width, float $height) {
        $this->width = $width;
        $this->height = $height;
        // parent::__construct($this->width, $this->height);
    }

    public function getArea() : float {
        return $this->width * $this->height;
    }
}
