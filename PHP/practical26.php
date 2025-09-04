<?php
$numbers = array(10, 20, 30, 40, 50, 60);
echo "Original Array:<br>";
foreach($numbers as $num){
    echo $num . " ";
    }

echo "<br><br>Reverse (without using array_reverse):<br>";
for ($i = count($numbers) - 1; $i >= 0; $i--){
    echo $numbers[$i] . " ";
}
echo "<br><br>Revers ( using array_reverse):<br>";
$reversed = array_reverse($numbers);
foreach ($reversed as $num){
    echo $num . " ";
}



?>