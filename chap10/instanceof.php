<?php
/*
instanceof演算子は、変数の方が次のいずれかの条件を満たしている場合に、trueを返す
- 「型名」の直接のインスタンスであるか
- 「型名」の実装クラスのインスタンスであるか
- 「型名」のサブクラスのインスタンスであるか
*/

require_once './Triangle.php';
require_once './Square.php';

// IFigure実装クラスの配列を用意
$figs = [];
$figs[] = new Triangle(10, 5);
$figs[] = new Square(10, 5);
$figs[] = new Triangle(3, 2);

// 配列$figsの内容を順番に用意
foreach ($figs as $fig) {
    // IFigureインターフェースを実装している場合のみgetAreaメソッドを実行
    if ($fig instanceof IFigure) {
        print '<p>' . get_class($fig) . ':' . $fig->getArea() . '</p>';
    }
}