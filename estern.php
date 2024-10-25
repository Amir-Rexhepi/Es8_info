<?php
session_start();
//controllo se ho settato la session di dati 
if (!isset($_SESSION['dati'])) {
    $_SESSION['dati'] = array();
}

// Controlla se i parametri GET sono impostati correttamente
if (isset($_GET['stazione'])) {
    if (isset($_GET['temp'])) {
        // Aggiungi un nuovo elemento a `$_SESSION['dati']` con stazione e temperatura
        $_SESSION['dati'][] = array(
            'stazione' => $_GET['stazione'],
            'temp' => $_GET['temp']
        );
    } else {
        echo "Metti la temperatura";
    }
} else {
    echo "Metti la città";}


foreach($_SESSION['dati'] as $dati){
    echo "<li>"; 
    echo implode(" ", $dati); 
    echo "° </li>";
}


?>
<html>
<body>
<a href="index.php">Clicca</a>
<a href="esplodi.php">reset</a>
<a href="media.php">repilogo</a>
</body>
</html>