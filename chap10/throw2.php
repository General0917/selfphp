<?php
// 自作の例外クラスを定義（作成）する
class UrlSyntaxException extends Exception {}
class UrlRequestException extends Exception {}

class MyUtil {
    // 内部で例外を生成するgetContentsメソッド
    public static function getContents(string $url) : string {
        // 指定されたURLの形式が正しくない場合...
        if (!preg_match('|http(s)?://([\w-]+\.)+[\w-]+(.[\w ./?%&=-]*)?|', $url)) {
            throw new UrlSyntaxException('不正なURLの形式です。');
        }

        $data = @file_get_contents($url);

        // データを取得できなかった場合...
        if (!$data) {
            throw new UrlRequestException('指定されたURLが見つかりません。');
        }

        return $data;
    }
}

try {
    print MyUtil::getContents('http://www.wings.msn.to/nothing/');
} catch (UrlSyntaxException $e) {
    print "警告：{$e->getMessage()}";
} catch (UrlREquestException $e) {
    print "エラー：{$e->getMessage()}";
}