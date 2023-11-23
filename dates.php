<?php
# Dia del mes amb números
date("d");
# Mes
date("m");
# Mes amb una representació textual (anglès)
date("M");
# Any
date("Y");
# Dia de la setmana (anglès)
date("l");
# Data completa en format Dia-Mes-Any
date("d/m/Y");
# Data completa en format Mes-Dia-Any
date("m/d/Y");
# Data completa en format Any-Mes-Dia
date("Y/m/d");
# Hora en format 24h
date("H");
# Hora en format 12h afegint “AM” o “PM”
date("Ha");
?>

<?php
# Escriu una funció en PHP que tradueixi la data i hora d’avui al català de manera automàtica, seguint el format de l’exemple: 
# Divendres, 4 d’agost del 2023 a les 19 hores 15 minuts i 00 segons
$dia = date("l");
$mes = date("M");

echo "$dia, date("d") de $mes del date("Y") a les date("H") hores date("i") minuts date("s") segons
?>