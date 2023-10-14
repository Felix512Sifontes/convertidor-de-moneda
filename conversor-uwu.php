<!DOCTYPE html>
<html>
<head>
    <title>Conversión de Bolívares a Dólares</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
}

h1 {
    color: #333;
}

form {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0,0,0,0.2);
}

label {
    display: block;
    margin-bottom: 10px;
}

input[type=number] {
    padding: 10px;
    border-radius: 5px;
    border: none;
    box-shadow: 0 0 5px rgba(0,0,0,0.2);
}
    </style>
 
    </head>


<body>
    <form method="post">
        <label for="dolares">Cantidad en Dólares:</label>
        <input type="text" id="dolares" name="dolares"><br><br>
         <label for="dolares">Tasa del dia:</label> <input type="text" id="tasadeldia" name="tasa"><br>
        <input type="submit" value="Convertir">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $dolares = $_POST["dolares"];
        $tasa =  $_POST["tasa"];
        echo "Cantidad en Bolívares: " . convertirDolaresABolivares($dolares, $tasa);
    }

    /*function obtenerTasaCambio() {
        
         $tasaCambio = 35;
        return $tasaCambio;
    }
*/
    function convertirDolaresABolivares($dolares, $tasa) {
       // $tasaCambio = obtenerTasaCambio();
        
        // Convertir dólares a bolívares
        $bolivares = $dolares * $tasa;

        return $bolivares;
    }
    ?>
</body>
</html>