<?php
session_start();
$somma = 0;
$conta = 0;
$media = 0;
$max = -9999999999999999999999999;

for( $i=0; $i< sizeof($_SESSION['dati']); $i++ ){
    $temp = $_SESSION['dati'][$i]['temp'];
    
    if($temp > $max){
        $max =   $temp;
    }
    $somma +=   $temp;
    $conta++;
}
$media = $somma / $conta;

echo "la temperatura più alta: $max <br>";
echo "la temperaturaa media è di: $media";
?>