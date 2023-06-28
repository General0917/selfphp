<?php
// class Figure {

// 抽象クラスを定義（抽象クラスを定義する際は、サブクラスから継承する必要がある）
abstract class Figure { 
    // プロパティを定義（protected修飾子で制限）
    protected $width;
    protected $height;

    // コンストラクタ（プロパティを初期化）
    public function __construct(float $width, float $height) {
        $this->width = $width;
        $this->height = $height;
    }

    // 面積を求める（中身はダミー）
    // public function getArea() : float {
    //     return 0;
    // }

    // 抽象メソッドを定義（抽象メソッドを定義する際は、サブクラスからオーバライドする必要がある）
    // 抽象メソッド内では処理を記載せずに、サブクラスで処理を記載する（以下の記載ではエラーが発生するので注意が必要！！）
    // protected abstract function getArea() : float {}
    protected abstract function getArea() : float;
}