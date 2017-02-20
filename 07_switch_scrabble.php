<?php

$woord = "quotering";
$punten = 0;

// gebruik een switch-case-statement binnen een for-loop om
// te itereren over een woord en de Scrabble-punten ervan te berekenen

// Q 10 punten
// U 4 punten
// O 1 punt
// T 2 punten
// E 1 punt
// R 2 punten
// I 1 punt
// N 1 punt
for ($i = 0; $i < strlen($woord); $i++){
    switch ($woord[$i]){
        case q:
        echo "Q 10 punten";
        break;
        case u:
        echo "U 4 punten";
        break;
        case o:
        echo "O 1 punten";
        break;
        case t:
        echo "T 2 punten";
        break;
        case r:
        echo "R 2 punten";
        break;
        case e:
        case i:
        case n:
        echo $woord[$i]+ " 1 punt";
        break;
    }
}

?>
