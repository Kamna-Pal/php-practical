<h3> Using for loop</h3>
<?php

for ($i =1; $i <= 20; $i++){
    echo $i . " ";
}

?>

<h3>Using While loop</h3>
<?php
$j = 1;
while ($j <= 20){
    echo $j . " ";
    $j++;
}
?>

<h3>Using do while loop</h3>
<?php
  $i = 1;
  do {
    echo $i . " ";
    $i++;
  }
  while ($i <= 20);
?>