<?php
$height = 230;
if ($height < 150) {
    echo "150cm 未満の方はご乗車できません。";
} else if ($height >= 200) {
    echo "200cm 以上の方はご乗車できません。";
} else {
    echo "ご乗車になれます。";
}

$weekday = "月曜";
switch ($weekday) {
    case "月曜":
        echo "可燃ごみの火です。";
        break;
    case "水曜":
        echo "資源ごみの日です。";
        break;
    default:
        echo "回収はありません。";
        break;
}

$a = 3;
$b = 3;
$c = 3;
var_dump($a == $b);
echo "\n";
var_dump($a != $b);
echo "\n";
var_dump($a > $b);
echo "\n";
var_dump($a >= $b);
echo "\n";
var_dump($a < $b);
echo "\n";
var_dump($a <= $b);
echo "\n";
var_dump($a === $c);
echo "\n";
var_dump($a !== $c);
echo "\n";
for($i = 0; $i < 10; $i++){
    echo $i;
}
$total = 0;
echo $total;
for ($i = 0; $i <= 100; $i++){
    $total += $i;
}
echo "\n";
echo $total;
echo "\n";
$fruits = array("apple", "orange", "lemon");
echo "\n";
echo count($fruits);
for ($i = 0; $i < count($fruits); $i++) {
    echo "要素は" . $fruits[$i];
    echo "\n";
}
echo "\n";
$animals = array("dog", "cat", "panda");

foreach($animals as $animal){
    echo "要素は" . $animal;
    echo "\n";
}
echo "\n";
/*
この部分はすべて
コメントになるため
プログラムとして
動作しない
*/

$name = "Ren";
if($name = "Ren"){
    echo "「私は $name です」";
} else {
    echo "「 $name ではありません」";
}
echo "\n";

$total = 0;
for ($i = 0; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;
echo "\n";
$fruits = array("apple", "peach", "banana", "melon","lemon");
foreach($fruits as $Ftuit){
    echo "好きなフルーツは" . $Ftuit;
    echo "\n";
}

/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i . "\n";
  }
}