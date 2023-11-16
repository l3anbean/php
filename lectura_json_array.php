<?php

$jsonString = file_get_contents('prova_json.json');


$arrayAsociatiu = json_decode($jsonString, true);

// Verifica si hay errores durante la decodificación
if (json_last_error() !== JSON_ERROR_NONE) {
    die('Error  JSON: ' . json_last_error_msg());
}


print_r($arrayAsociatiu);
?> 


<?php
function llegirFitxerJSON($nomFitxer) {
    $jsonString = file_get_contents($nomFitxer);

    $arrayAssociatiu = json_decode($jsonString, true);

    // Verifica si hi ha errors durant la decodificació
    if (json_last_error() !== JSON_ERROR_NONE) {
        die('Error JSON: ' . json_last_error_msg());
    }

    return $arrayAssociatiu;
}

// Crida la funció per llegir el fitxer prova_json.json
$persones = llegirFitxerJSON('prova_json.json');

// Mostra la array carregada
print_r($persones);
?>
<?php
$jsonString = file_get_contents('prova_json.json');

$arrayAssociatiu = json_decode($jsonString, true);

// Verifica si hay errores durante la decodificación
if (json_last_error() !== JSON_ERROR_NONE) {
    die('Error JSON: ' . json_last_error_msg());
}

#$persones = array();
#carrega_fitxer('prova_json.json',$persones);
#print_r($persones);
?>
<table border="1">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Edat</th>
            <th>Ciutat</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($arrayAssociatiu as $persona): ?>
            <tr>
                <td><?= $persona['nom'] ?></td>
                <td><?= $persona['edat'] ?></td>
                <td><?= $persona['ciutat'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>


<?php
function llegirFitxerJSON($nomFitxer) {
    $jsonString = file_get_contents($nomFitxer);

    $arrayAssociatiu = json_decode($jsonString, true);

    // Verifica si hi ha errors durant la decodificació
    if (json_last_error() !== JSON_ERROR_NONE) {
        die('Error JSON: ' . json_last_error_msg());
    }

    return $arrayAssociatiu;
}

// Crida la funció per llegir el fitxer prova_json.json
$persones = llegirFitxerJSON('prova_json.json');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dades de Persones</title>
</head>
<body>

<table border="1">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Edat</th>
            <th>Ciutat</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($persones as $persona): ?>
            <tr>
                <td><?= $persona['nom'] ?></td>
                <td><?= $persona['edat'] ?></td>
                <td><?= $persona['ciutat'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>

