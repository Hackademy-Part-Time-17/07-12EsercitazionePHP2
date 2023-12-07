<?php
/*
Esercizio 1
Creare una variabile $temperatura e, utilizzando if, stampare il testo “Fa freddo" se il valore contenuto in temperatura è minore di 15 gradi.
Successivamente, utilizzando else, stampare il testo "Fa caldo" se la temperatura è maggiore o uguale a 15 gradi.
Infine, utilizzando if else, e modificando opportunamente quanto già scritto, aggiungere la stampa del testo "Fa molto caldo" se la temperatura supera i 25 gradi.
Quindi, ricapitolando:
- Minore di 15 → Fa freddo
- Tra 15 e 25 → Fa caldo
- Maggiore di 25 → Fa molto caldo
*/
/*
$temperatura=50;
if($temperatura<15){
    echo "Fa freddo\n";
}else if($temperatura>25){
    echo "Fa molto caldo\n";
}else{
    echo "Fa caldo\n";
}
*/
/*
Esercizio 2
Utilizzare un ciclo for per stampare i numeri da 1 a 10. Ripetere lo stesso esercizio utilizzando while e do while.
*/
/*
for($f=1;$f<11;$f++){
    echo $f.' ';
}
echo "\n";
$w=1;
while($w<11){
    echo $w.' ';
    $w++;
}
echo "\n";
$d=1;
do{
    echo $d.' ';
    $d++;
}while($d<11);
echo "\n";
*/
/*
Esercizio 3
Creare un array $corsi contenente i seguenti corsi: PHP, Laravel, JS, CSS e stampare tutti gli elementi (con echo) utilizzando foreach.
*/
/*
$corsi=['PHP','Laravel','JS','CSS',];
foreach($corsi as $corso){
    echo "$corso\n";
}
*/
/*
Esercizio 4
All’esercizio precedente aggiungere anche la stampa degli indici degli elementi dell’array.
Esempio stampa:
0: PHP
1: Laravel
ecc…
*/
/*
$courses=['PHP','Laravel','JS','CSS',];
foreach ($corses as $indice => $course){
    echo $indice . " : " . $corso . "\n";
}
*/
/*
Esercizio 5
Aggiungere il corso HTML all’array $corsi senza modificare l’array già creato.
*/
/*
$courses=['PHP','Laravel','JS','CSS',];
$courses[]='HTML';
print_r($courses);
*/
/*
Esercizio 6
Modificare l’elemento JS dell’array $corsi in Javascript, senza modificare l’array già creato.
*/
/*
$corsi = array("PHP", "Laravel", "JS", "CSS");
$corsi_modificati = $corsi;
$indice_js = array_search('JS', $corsi_modificati);
if ($indice_js !== false) {
    $corsi_modificati[$indice_js] = 'Javascript';
}
echo "Array originale:\n";
foreach ($corsi as $corso) {
    echo $corso . "\n";
}
echo "\nArray con modifica:\n";
foreach ($corsi_modificati as $corso) {
    echo $corso . "\n";
}
*/
$corsi=['PHP', 'Laravel', 'JS', 'CSS',];
foreach($corsi as $indice=>$corso){
    if($corso=='JS'){
        $corsi[$indice]='Javascript';  
    }
}
print_r($corsi);
/*
Esercizio 7
Creare una variabile $button che contenga un numero intero. Poi, attraverso l'utilizzo di switch stampare le seguenti stringhe:
Benvenuto al piano terra (se il valore di $button è uguale a 0)
Benvenuto al primo piano (se il valore di $button è uguale a 1)
Benvenuto al secondo piano (se il valore di $button è uguale a 2)
Benvenuto al terzo piano (se il valore di $button è uguale a 3)
Piano non disponibile (per qualsiasi altro valore di button)
*/
/*
$button=5;
switch ($button) {
    case 0:
        echo 'Benvenuto al piano terra';
        break;
    case 1:
        echo 'Benvenuto al primo piano';
        break;
    case 2:
        echo 'Benvenuto al secondo piano';
        break;
    case 3:
        echo 'Benvenuto al terzo piano';
        break;
    default:
        echo 'Piano non disponibile';
        break;
}
*/
/*
Esercizio 8
- creare una variabile $search che contiene uno degli elementi (a vostra scelta) dell’array $corsi creato nell’esercizio 3.
- Utilizzando opportunamente foreach ed if: Scorrere l'array $corsi e stampare "Trovato!" se l'elemento corrente è uguale a quello contenuto nella variabile $search.
*/
/*
$search='JS';
$corsi = array("PHP", "Laravel", "JS", "CSS");
foreach($corsi as $corso){
    if($search===$corso){
        echo "Trovato!";
        break;
    }
}
*/
/*
Esercizio 9
Creare un array che ha come elementi i numeri da 1 a 10 [1, 2, 3, ecc...]. Utilizzando foreach, stampare "Pari" se l'elemento corrente è un numero pari e "Dispari" in caso contrario.
Esempio stampa:
1 dispari
2 pari
ecc…
*/
//empty restituisce true se non ci sono elementi nell'array
//un array può essere scritto anche con il suo nome e l'utilizzo delle parentesi tonde immediatamente dopo ( array(x,y,z) array() )
/*
$corsi = array();

if (empty($corsi)) {
    echo "Nessun corso disponibile";
} else {
    foreach ($corsi as $corso) {
        echo $corso . "\n";
    }
}
*/
/*
Esercizio 11
Definire una costante MAX uguale a 10 ed utilizzarla in un ciclo for che stampa i numeri da 1 a MAX
*/
/*
define('MAX', 10); 
for ($i = 1; $i <= MAX; $i++) {
    echo $i . " ";
}
*/






