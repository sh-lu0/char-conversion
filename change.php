<?php
// 半角英字を全角：R
// 「全角ひらがな」を「全角カタカナ」に変換：C
// 「半角カタカナ」を「全角カタカナ」に変換：K
// 「半角」数字を「全角」に変換：N

<?php
class Hoge
{
    public static function Convert($str)
    {
        $option = "KVCA";
        $str2 = mb_convert_kana($str, $option);
        $r = mb_strtoupper($str2);
        echo $r;
    }
}

$str_kana = "ABC ＡＢＣ abc 123 １２３ ｱｲｳｴｵ アイウエオ　あいうえお　ぁぃぅぇぉ　田中";
Hoge::Convert($str_kana);
