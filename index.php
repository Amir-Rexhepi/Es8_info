<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Previsioni</h1>
    <form action="estern.php" method="get">
        <p>Stazioni<select name="stazione">
            <option value="Firenze">Firenze</option>
            <option value="Bologna">Bologna</option>
            <option value="Napoli">Napoli</option>
        </select>
    Temperatura<input type="number" name="temp" min="-10" max="+45">
     <input type="submit"name="invia" value="invia"></p>
    </form>
</body>
</html>