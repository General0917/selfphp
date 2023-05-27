<?php
$model_num = '105';
switch ($model_num) {
    case '102':
    case '103':
    case '105':
        print 'X100系統のGAT-Xシリーズです。';
        break;
    case '207':
        print 'X200系統のGAT-Xシリーズです。';
        break;
    case '303':
        print 'X300系統のGAT-Xシリーズです。';
        break;
    default:
        print 'どのXナンバーにも属さないGAT-Xシリーズです。';
        break;
}