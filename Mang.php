<?php
$a = array(3);
$a[0] = "satou";
$a[1] = "suzuki";
$a[2] = "takahashi";

echo ($a[0])."\n";
echo ($a[1])."\n";
echo ($a[2])."\n";


$a = ["satou", "suzuki", "takahashi"];
echo ($a[0])."\n";
echo ($a[1])."\n";
echo ($a[2])."\n";

$a = ["satou", "suzuki", "takahashi"];

$a[1] = "tanaka";
echo ($a[0])."\n";
echo ($a[1])."\n";
echo ($a[2])."\n";
