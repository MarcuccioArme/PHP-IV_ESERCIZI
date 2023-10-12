<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operazioni logiche bit a bit</title>
</head>
<body>

    <h1>Operazioni logiche bit a bit</h1>

    <form action="<?php echo($_SERVER["PHP_SELF"]) ?>" method="POST">

        Numero: <input type="number" id="numero" name="numero" required><br>
        Shift right <input type="radio" name="operazione" value="shift_right" checked> <br>
        Shift left <input type="radio" name="operazione" value="shift_left"> <br>
        Not <input type="radio" name="operazione" value="not"> <br><br>

        <input type="submit" name="submit" value="<-- CALCOLA -->"><br><br>

    </form>
    
</body>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $numero = $_POST["numero"];
        $operazione = $_POST["operazione"];

        $risultato;

        if ($operazione == "shift_right") {
            $risultato = $numero >> 1;
        } elseif ($operazione == "shift_left") {
            $risultato = $numero << 1;
        } elseif ($operazione == "not") {
            $risultato = ~ $numero;
        }

        echo "Risultato in binario: ". decbin($risultato) ."<br>";
        echo "Risultato in decimale: ". $risultato;

    }
?>