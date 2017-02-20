<?php

// Maak een Array met 3 namen van medeleerlingen.
$arr = array("Axel","Kenzo","Daan");

// Itereer er over met een for-loop. Print ze af in een HTML ongenummerde lijst.
for ($i = 0; $i < Count($arr); $i++){
    echo $arr[$i] . "<br>";
}
echo "<br>";
// Itereer er over met een foreach-loop. Print ze af in HTML genummerde lijst.
foreach($arr as $namekey => $name){
    echo ($namekey +1) ." " . $name;
    echo "<br>";
}
echo "<br>";
$naam = "Willy";

// Itereer met een for-loop over de variable $naam alsof het een array was.
for ($i = 0; $i < strlen($naam); $i++){
    echo $naam[$i] . "<br>";
}
?>
