<?php
require_once './TriangleFigure1.php';

// クラスをインスタンス化
$tri = new TriangleFigure1();

// クラスのフィールド値を定義
$tri->base = -10; // 負数でも定義可能...
$tri->height = 'HenoHeno'; // 文字数でも、受け入れてしまう

print "三角形の面積:{$tri->getArea()}";