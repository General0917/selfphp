<?php
require_once './TriangleFigure2.php';

$tri = new TriangleFigure2();

// どちらも負数なので、設定値は無視され、コンストラクタで設定した値が定義される
$tri->setBase(-10);
$tri->setHeight(-10);

print "三角形の面積:{$tri->getArea()}";