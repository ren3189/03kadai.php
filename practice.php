<?php
//echo 'hello php!';
$value = 6;
echo $value + 2;
echo "\n";
echo $value - 2;
echo "\n";
echo $value * 2;
echo "\n";
echo $value / 2;
echo "\n";
echo $value / 5;
echo "\n";
echo $value % 5;
echo "\n";
$value = "AAA";
echo $value . "BBB";
echo "\n";
var_dump($value."BBB");
echo "\n";
$value = 10;
$result = $value == 20;
var_dump($result);
echo "\n";
$value = 10;
$result = $value < 20;
var_dump($result);
echo "\n";
$value = 10;
$result = $value > 20;
var_dump($result);
echo "\n";
$a = "20";
$b = 20;
$result = $a == $b;
var_dump($result);
echo "\n";
$result = $a === $b;
var_dump($result);
echo "\n";
echo $a + $b;
echo "\n";
$value = 10;
++$value;
$value = $value + 1;
echo $value;
echo "\n";
$value = 10;
--$value;
echo $value;
echo "\n";
$value = 10;
$value += 5;
echo $value;
echo "\n";
$value = 10;
$value -= 5;
echo $value;
echo "\n";
$value = "apple";
$value .= " orange";
echo $value;
echo "\n";
$array = [2017, 2018, 2019, 2020];
echo $array[0];
echo "\n";
echo $array[2];
echo "\n";
$array2 = ["spring", "summer", "autumn", "winter"];
echo $array2[2];
echo "\n";
$animals = [
    "cat" => "猫",
    "dog" => "犬",
    "bird" => "鳥"
];
echo $animals["cat"];
echo "\n";