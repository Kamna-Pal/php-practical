<?php
$countries = array(
    "India" => "New Delhi",
    "USA" => "Washington D.C.",
    "UK" => "London",
    "France" => "Paris",
    "Japan" => "Tokyo"
);
$capital = "Paris";
$country = array_search($capital,$countries);
if($countries){
    echo "The capital $capital belongs to $country .";
}
else{
    echo "$capital is not found in the array.";
}
?>