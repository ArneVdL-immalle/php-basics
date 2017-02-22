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
        case 'o':
        case 'e':
        case 'i':
        case 'n':
        $punten += 1;
        break;
        case 't':
        case 'r':
        $punten += 2;
        case 'u':
        $punten += 4;
        break;
        case 'q':
        $punten = 10;
        break;
    }
}
echo "Je hebt ".$punten. " punten behaald";
?>
