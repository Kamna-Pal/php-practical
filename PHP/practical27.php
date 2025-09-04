<?php
$numbers = array(45, 12, 78, 34, 23, 89, 67);
echo "<h3>Original Array:</h3>";
print_r($numbers);
echo "<br>";
sort($numbers);
echo "<h3?>Array in Ascending order:</h3><br>";
print_r($numbers);
echo "<br>";
rsort($numbers);
echo "<h3?>Array in Descending order:</h3><br>";
print_r($numbers);
?>