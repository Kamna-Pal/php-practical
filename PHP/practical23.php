<?php
// Original Array
$numbers = array(5, 3, 9, 1, 7);

echo "<h3>Original Array:</h3>";
print_r($numbers);
echo "<br><br>";

// sort() - Ascending order (values)
$sorted = $numbers;
sort($sorted);
echo "<b>sort() - Ascending values:</b><br>";
print_r($sorted);
echo "<br><br>";

// rsort() - Descending order (values)
$sorted = $numbers;
rsort($sorted);
echo "<b>rsort() - Descending values:</b><br>";
print_r($sorted);
echo "<br><br>";

// asort() - Ascending order (preserve keys)
$sorted = $numbers;
asort($sorted);
echo "<b>asort() - Ascending values (preserve keys):</b><br>";
print_r($sorted);
echo "<br><br>";

// arsort() - Descending order (preserve keys)
$sorted = $numbers;
arsort($sorted);
echo "<b>arsort() - Descending values (preserve keys):</b><br>";
print_r($sorted);
echo "<br><br>";

// ksort() - Ascending order by keys
$assoc = array("d"=>5, "b"=>3, "a"=>9, "c"=>1);
ksort($assoc);
echo "<b>ksort() - Ascending keys:</b><br>";
print_r($assoc);
echo "<br><br>";

// krsort() - Descending order by keys
$assoc = array("d"=>5, "b"=>3, "a"=>9, "c"=>1);
krsort($assoc);
echo "<b>krsort() - Descending keys:</b><br>";
print_r($assoc);
echo "<br><br>";
?>