<!DOCTYPE html>
<html>
<body>


<?php
echo "Tomorrow I \'ll learn PHP global variables."."\n"; 
echo '<br>'; 
echo "This is a bad command : del c:\\*.*"."\n";
echo "<br>";

$phrase  = "debugging|is+hard";
$exp = ["|", "+"];
$rep   = [" "," "];
echo "<br>";

$str = str_replace($exp, $rep, $phrase);
echo $str;
echo "<br>";

$arr = explode(' ', $str);
print_r ($arr);
echo "<br>";

array_pop($arr);
print_r ($arr);
echo "<br>";

array_push($arr,"easy");
print_r ($arr);
echo "<br>";

$prices = array(14, 5, 56, 32);
$sum = array_sum($prices);
echo $sum;
$avg = $sum / count($prices);
echo $avg;
echo "<br>";

$temp = array(68, 70, 72, 58, 60, 79, 82, 73, 75, 77, 73, 58, 63, 79, 78, 68, 72, 73, 80, 79, 68, 72, 75, 77, 73, 78, 82, 85, 89, 83);
$sum = array_sum($temp);
$avg = $sum / count($temp);
echo $avg;
echo "<br>";

$temp2 = array(68, 70, 72, 58, 60, 79, 82, 73, 75, 77, 73, 58, 63, 79, 78, 68, 72, 73, 80, 79, 68, 72, 75, 77, 73, 78, 82, 85, 89, 83);
sort($temp2, SORT_NUMERIC);
$lowtemp = array_slice($temp2,0, 5);
print_r ($lowtemp);
echo '<br>';

$hightemp = array_slice($temp2,-5, 30);
print_r ($hightemp);
echo "<br>";

$slice = array_slice($temp,0, 10);
$sumOf10 = array_sum($slice);
$avg10 = $sumOf10 / 10;
echo $avg10;

?>


</body>
</html>
