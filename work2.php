<?php

$name = "堀見莉央";

if ($name == "堀見莉央") {
    echo "私は" . $name . "です";
} else {
    echo "堀見莉央ではありません";
}

echo "\n";

$total = 0;

for ($i = 1; $i <= 10000; $i++) {
    $total += $i;
}

echo $total;

echo "\n";

$fruits = ["りんご", "バナナ", "ぶどう", "メロン", "レモン"];

foreach($fruits as $fruit) {
    echo $fruit;
    if ($fruit != $fruits[4]) {
        echo "・";
    }
}

echo "\n";

// for文の始めの値を定義する
$start = 1;
// for文の終わりの値を定義する
$end = 100;

for($i = $start; $i <= $end; $i ++) {
    
    // 5で割り切れたら{}内を実行する
    if ($i % 5 == 0) {
        echo $i;
        echo "\n";
    }
}