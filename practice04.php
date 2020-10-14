<?php

// 1~10までを足した値を返す関数
function sum($max) {
    
    // $resultは結果を保存する変数
    $result = 0;
    
    // $iは1からはじまり10より大きくなるまでループする
    for ($i = 1; $i <=$max; $i++) {
        
        // $resultに$iを順番に足していく
        $result += $i;
    }
    
    // $resultを結果として返す
    return $result;
}

//$maxを定義する
$max = 1000000;

//関数を実行する
echo "1から" . $max . "までを足し算すると、" . sum($max) . "です。";

echo "\n";


// strl;en関数の練習 //
$string ="ochimpo-milk5959";
echo $string . "　";
if (strlen($string) < 8 || strlen($string) > 16) {
    echo "×　パスワードは8文字以上16文字以内で設定してください";
} else {
    echo "◎　このパスワードは使用可能です(" . strlen($string) . "文字)";
}

echo "\n";


// str_replace関数の練習 //
$string2 = "死ね！";
echo $string2;
if (strpos($string2, "死ね") !== false) {
    echo "\n";
    echo "おっと、これはよくないですね。きれいな言葉に言い換えましょう！";
    echo "\n";
    $new_string2 = str_replace("死ね", "お逝きなさい", $string2);
    echo $new_string2;
}
echo "\n";


// count関数の練習 //
$fruits = array("りんご", "バナナ", "メロン", "レモン", "スイカ", "みかん");

echo "登録されている果物は" . count($fruits) . "種類です。\n";
echo "ちなみにメロンとスイカは野菜です。\n";


// asort関数・arsort関数の練習 //

$array = array(2,5,9,7,3,1,8,6,4);
asort($array);
print_r($array);
arsort($array);
print_r($array);

?>