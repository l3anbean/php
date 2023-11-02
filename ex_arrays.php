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