<?php

// 引数に数値を指定して実行すると、数値を2倍にして返す関数 //
function x2($number) {
    return $number * 2;
}
echo x2(4) . "\n";


// $aと$bを仮引数に持ち、$aと$bを足した結果を返す関数 //
function plus($a, $b) {
    return $a + $b;
}
echo plus(5, 4) . "\n";


// $arrという配列の仮引数を持ち、数値が入った配列array(1,3,5,7,9)を渡すとその要素をすべてかけた結果を返す関数 //
$array = array(1, 3, 5, 7, 9);
$xall = 1;
foreach($array as $ar) {
    $xall *= $ar;
}
echo $xall . "\n";


// 配列の中で1番大きい値を返すmax_arrayという関数の実装 //
function max_array($arr){
    $max_number = $arr[0];
    foreach ($arr as $a) {
        if ($max_number < $a) {
            $max_number = $a;
        }
    }
    return $max_number;
}
echo max_array(array(3, 7, 109, 9, 103)) . "\n";


// strip_tags関数 = HTMLタグを含む文字列からタグを取り除く関数 //
$strip = "<h1>strip_tags関数</h1><p>を用いて、HTMLタグを取り除きます</p>";
echo strip_tags($strip) . "\n";

// array_push関数 = 渡された変数を配列の最後に追加する関数 //
$fruits = ["りんご", "メロン", "スイカ"];
print_r($fruits);
echo "ここにバナナとイチゴを追加します。\n";
array_push($fruits, "バナナ", "いちご");
print_r($fruits);


// array_merge関数 = 配列の要素の最後にひとつまたは複数の配列を結合する関数 //
$vegetables_1 = ["トマト", "レタス", "きゅうり"];
$vegetables_2 = ["にんじん", "じゃがいも", "玉ねぎ"];
$vegetables_3 = ["パプリカ", "パクチー"];
$vegetables_all = array_merge($vegetables_1, $vegetables_2, $vegetables_3);
print_r($vegetables_all);


// time関数 = 現在時刻のUNIXタイムスタンプ(1970年1月1日からの秒数)を返す関数 //
// mktime関数 = 指定した日時のUNIXタイムスタンプを返す関数 //
// date関数 = 現在日時(第二引数にUNIXタイムスタンプを指定した場合、そのUNIXタイムスタンプが示す日時)を返す関数 //
date_default_timezone_set("Asia/Tokyo");

echo "現在時刻のUNIXタイムスタンプ:" . time() . "\n";
echo "2020年3月31日0時00分のUNIXタイムスタンプ:" . mktime(0, 0, 0, 3, 31, 2020) . "\n";
echo "現在時刻は、" . date("Y-m-d H:i:s") . "です。\n";
echo "UNIXタイムスタンプ1600000000は、" . date("Y年m月d日 H時i分s秒", 1600000000) . "です。\n";


?>