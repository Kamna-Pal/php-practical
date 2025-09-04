<?php
$fruits = array(
    "apple" => 100,
    "banana" => 40,
    "mango" => 120,
    "Orange" => 60
);
echo "Original Array:<br>";
print_r($fruits);
echo "<br>";
asort($fruits);
echo "<br><br> Sorted by Values(asort):<br>";
print_r($fruits);
echo "<br>";
ksort($fruits);
echo "<br><br> Sorted by Keys (ksort):<br>";
print_r($fruits);
?>