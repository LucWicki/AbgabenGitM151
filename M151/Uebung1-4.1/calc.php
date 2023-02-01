<?php
$x = $_GET['numberx'];
$y = $_GET['numbery'];
echo "Number x: {$x}!<br />";
echo "Number y: {$y}!<br />";

$plus = $x + $y;
$minus = $x -$y;
$mal = $x* $y;
$div = $x / $y;

echo "Plus: {$plus}!<br />";
echo "Minus: {$minus}!<br />";
echo "Mal: {$mal}!<br />";
echo "Division: {$div}!<br />";

//add: /index.php?numberx=5&numbery=7