<?php

/*
インターフェースを定義する際の注意点
- 中身を持つメソッドやプロパティ（フィールド）は定義できない。（配置できるのは抽象メソッドと定数のみ）
- 配下のメソッドが抽象メソッドであることは明らかなので、abstract修飾子は不要であり、指定はしてはいけない
- アクセス修飾子も指定できない。public修飾子を指定しても問題ないが、特に意味はないので、通常は割愛で問題ない
- 構文規則ではないが、インターフェースであることがわかるように、IFigure、FigureInterfaceのように接頭辞/接尾辞を指定する
*/

/*
インターフェースとクラスの違い
「多重継承」が可能である点である
*/

interface IFigure {
    function getArea() : float;
}