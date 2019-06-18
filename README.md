# char-conversion

## PHP での文字列変換

- 公式マニュアル  
https://www.php.net/manual/ja/function.mb-convert-kana.php

- 参考サイト  
https://qiita.com/hrdaya/items/470b338e7c0014fe6dc7
https://webkaru.net/php/function-strtoupper-strtolower/

- 「全角ひらがな」から「全角カタカナ」への変換：C
  変換されない文字：ゔゝゞゕゖ
- 「半角英数字」から「全角英数字」への変換：A
  変換されない文字：" ' \ ~
- 「半角カタカナ」から全角カタカナへの変換：K
　 変換されない文字：ヷ・ヺ
- 濁点付きの文字を一文字に変換：V
　"K", "H" と共に使用するとマニュアルにあるが、
　半角カタカナからの変換の時以外には何も変換されない。
