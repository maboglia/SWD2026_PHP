<?php

/*
Esercizio 2: Variabili e Operazioni Aritmetiche
Crea uno script PHP che dichiara due variabili numeriche e stampa la somma, la differenza, il prodotto e il quoziente.
*/

$a = 10;
$b = 5;

// echo "\nLa somma di $a e $b è: " . ($a + $b);
// echo "\nLa differenza di $a e $b è: " . ($a - $b);
// echo "\nIl prodotto di $a e $b è: " . ($a * $b);
// echo "\nIl quoziente di $a e $b è: " . ($a / $b);

/*
Esercizio 3: Condizioni
Scrivi uno script PHP che controlla se una variabile numerica è positiva, negativa o zero e stampa un messaggio appropriato.
*/

$numerica = 7;
$giudizio = 0;

if($numerica > 7 ){
    $giudizio = 'Molto buono';
} elseif($numerica <= 7 && $numerica >=5){
    $giudizio = 'Discreto';
} else {
    $giudizio = 'Sufficiente';
}



switch($numerica){
    case $numerica > 7:
        $giudizio = 'Molto buono';
        break;
    case $numerica <= 7 && $numerica >=5:
        $giudizio = 'Discreto';
        break;
    default:
        $giudizio = 'Sufficiente';
}   

$giudizio = match(true){
    $numerica > 7 => 'Molto buono',
    $numerica <= 7 && $numerica >=5 => 'Discreto',
    default => 'Sufficiente'
};