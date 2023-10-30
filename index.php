<?php

/*ESERCIZIO 1
Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array*/


$num = [10, 4, 35, 120, 76, 60];

$ressom = 0;
$sommapari = 0;

for ($i = 0; $i < count($num); $i++) {

  if ($num[$i] % 2 == 0) {

    $ressom = $ressom + $num[$i];

    $sommapari++;
  }
}

$Result = $ressom / $sommapari;

echo $Result;

/*ESERCIZIO 2
Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, 
per ogni utente stampare “Buongiorno Sig. Nome Cognome”  o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere*/


$users = [
  ['name' => 'Nicola', 'surname' => 'Poscia', 'gender' => 'Maschio'],
  ['name' => 'Livia', 'surname' => ' Bonsai', 'gender' => 'Femmina'],
  ['name' => 'Antonio', 'surname' => 'Vitobello', 'gender' => 'Maschio'],
  ['name' => 'Pasqualina', 'surname' => 'Ciarlegio', 'gender' => 'Femmina'],
  ['name' => 'Valerio', 'surname' => 'Vacca', 'gender' => 'Maschio'],  //<!-- Il migliore <3 -->
  ['name' => 'Angela', 'surname' => 'DelPiero', 'gender' => 'Femmina'],
];

foreach ($users as $user) {

  if ($user['gender'] == 'Maschio') {

    echo "Buongiono Sig. $user[name] $user[surname] \n ";
  } else {

    echo "Buongiorno Sig.ra $user[name] $user[surname] \n";
  }
}


/* ESERCIZIO 3
<!-- Scrivere un programma che stampi in console tutti i numeri da uno a cento.
//Se il numero è multiplo di 3 stampare “PHP” al posto del numero; se multiplo di 5 stampare “JAVASCRIPT”; se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY89". */

for ($i = 1; $i < 100; $i++) {

  if ($i % 3 == 0 && $i % 5 == 0) {

    echo "HACKADEMY89 \n";
  } elseif ($i % 3 == 0) {

    echo "PHP \n";
  } elseif ($i % 5 == 0) {

    echo "JAVASCRIPT \n";
  } else {

    echo $i . " \n";
  }
}
