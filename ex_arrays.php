<?php
#Generar de forma aleatòria una array unidimensional de nombres de 10 posicions.
$num = array();
for ($i = 0; $i < 10; $i++) { 
    $num[$i] = rand(1, 20);
    echo "$num[$i]";
    echo "<br>";
}
#print_r($num)
?>

<?php
#Cercar el nombre màxim i el nombre mínim d’aquesta array. 
$num = array();
for ($i = 0; $i < 10; $i++) {
    $num[] = rand();
}
#print_r($num);

$max = max($num); 
$min = min($num); 

echo "Nombre màxim: " . $max . "\n";
echo "Nombre mínim: " . $min . "\n";
?>

<?php
#Comptar quants d’elements té l’array.
$num = array();
for ($i = 0; $i < 10; $i++) { 
    $num[$i] = rand(1, 20);
    echo "$num[$i]";
    echo "<br>";
}
#print_r($num)
$cnt = count($num);
echo "L'array te $num elements";
?>

<?php
#Sumar els elements d’una array. Calcular la mitjana dels elements d’una array.
$num = array();
for ($i = 0; $i < 10; $i++) { 
    $num[$i] = rand(1, 20);
    echo "$num[$i]";
    echo "<br>";
    $sum += $num[$i];
}
$cnt = count($num);
$avg = $sum / $cnt;
echo "La suma del nombres de l'array es igual a: $sum";
echo "La mitjana de la suma dels elements es igual a : $avg";
?>

<?php
#Tornar un string amb els elements d’una array separats per comes (ús funció implode)
$num = array();
$sum = 0;

for ($i = 0; $i < 10; $i++) {
    $num[$i] = rand(1, 20);
    echo "$num[$i]";
    echo "<br>";
    $sum += $num[$i];
}

$str = implode(", ", $num);

echo "Array elements as a string: $str";
?>

<?php
#Ordenar un array de nombres de forma ascendent i de forma descendent. Mostrar els resultats dins d’un string.
$num = array();

for ($i = 0; $i < 10; $i++) {
    $num[$i] = rand(1, 20);
    echo "$num[$i]";
    echo "<br>";
}

sort($num);
$ascStr = implode(", ", $num);

rsort($num);
$dscStr = implode(", ", $num);

echo "Ascendent $ascStr<br>";
echo "Descendent $dscStr";
?>

<?php
#Mostrar la informació de l’array ordenada de l’exercici anterior dins d’una taula HTML.

?>

<?php
#Cercar un element donat dins d’una array 
$num = array();

for ($i = 0; $i < 10; $i++) {
    $num[$i] = rand(1, 20);
    echo "$num[$i]";
    echo "<br>";
}

$srcElmt = 15; 

if (in_array($srcElmt, $num)) {
    echo "L'element $srcElmt existeix dins l'array.";
} else {
    echo "L'element $srcElmt no existeix dins l'array.";
}
?>

<?php
#Eliminar elements duplicats d’una array indexada.
$num = array();

for ($i = 0; $i < 10; $i++) {
    $num[$i] = rand(1, 20);
    echo "$num[$i]";
    echo "<br>";
}

$uniqueArray = array_unique($num);

echo "Array without duplicate elements: ";
foreach ($uniqueArray as $element) {
    echo "$element ";
}
?>

<?php
# Imprimir quants números positius, negatius i zeros hi ha en l’array.

$num = array();
$positiveCount = 0;
$negativeCount = 0;
$zeroCount = 0;

for ($i = 0; $i < 10; $i++) { 
    $num[$i] = rand(-10, 10);
    echo "$num[$i]";
    echo "<br>";

    if ($num[$i] > 0) {
        $positiveCount++;
    } elseif ($num[$i] < 0) {
        $negativeCount++;
    } else {
        $zeroCount++;
    }
}

echo "Nombres positius: $positiveCount<br>";
echo "Nombres negatius: $negativeCount<br>";
echo "Zeros: $zeroCount<br>";
?>

<?php
# Afegeix 2 elements al final de l’array.
$num = array();
for ($i = 0; $i < 10; $i++) { 
    $num[$i] = rand(1, 20);
    echo "$num[$i]";
    echo "<br>";
}

array_push($num, 21, 22);

echo "Array amb push:<br>";
print_r($num);
?>

<?php
# Elimina aquests 2 anteriors elements.
$num = array();
for ($i = 0; $i < 10; $i++) { 
    $num[$i] = rand(1, 20);
    echo "$num[$i]";
    echo "<br>";
}

array_pop($num);
array_pop($num);

echo "Array amb valors adicionals elminiats:<br>";
print_r($num);
?>

<?php
# Practica amb array_diff, array_intersect, array_merge. 
# Per a tal crea dues array, una amb el nom dels alumnes que fan IFC31A i l’altre amb els nom dels alumnes que fan IFC31B. 
# Si un alumne en duu de primer ha d’aparèixer a les dues llistes.

?>

<?php
# Sumar tots els elements d’una matriu de nombres i compta quants d’elements té La matriu és de dues dimensions de la mateixa longitud.
$matriu = array (
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);
for ($i=0; $i< count($matriu[0]); $i++) {
$colum_act = array_column($matriu, $i);
$sum_actual = array_sum($colum_act);
$total_sum = $total_sum + $sum_actual;
$total_elem = $total_elem + count($colum_act);
}
echo "La suma dels elements es: $total_sum <br>";
echo "El total d'elemts de matriu es: $total_elem";
var_dump(array_map(max,$i));

?>

<?php

for ($row=0; $row<4; $row++)
    for($col=0, $col<3; )
?>

<?php
# Cercar un element en una matriu fent ús de in_array. Torna si el trobes o no. 
# Fer dues versions una amb el foreach que recorr les files i l’altra amb array_merge(...$matriu) que el que fa és convertir una array_multidimensional en unidimensional. 

$matriu = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

$elem = 5;
$trob = false;

foreach ($matriu as $fila) {
    if (in_array($elem, $fila)) {
        $trob = true;
        break;
    }
}

if ($trob) {
    echo "S'ha trobat l'element $elem dins la matriu.";
} else {
    echo "no s'ha trobat l'element $elem dins la matriu.";
}

$matrix = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

$searchElement = 5;

$mergedMatrix = array_merge(...$matrix);

if (in_array($searchElement, $mergedMatrix)) {
    echo "Element found in the matrix.";
} else {
    echo "Element not found in the matrix.";
}


$matrix = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

$searchElement = 5;

$mergedMatrix = array_merge(...$matrix);

if (in_array($searchElement, $mergedMatrix)) {
    echo "S'ha trobat l'elemnt $searchElement dins la matriu <br>";
} else {
    echo "No s'ha trobat l'elemnt $searchElement dins la matriu";
}
?>
