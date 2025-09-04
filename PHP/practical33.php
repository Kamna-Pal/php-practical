<?php
$fruits = array(
    "apple" => 100,
    "banana" => 50,
    "mango" => 120
);
$key = "banana";
if (array_key_exists($key, $fruits)){
    echo "key '$key' exists in the array.";
}
else{
    echo "key '$key' does not exists in the array.";
}
?>