<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operazioni logiche</title>
</head>
<body>

    <h1>Operazioni logiche</h1>

    <form action="<?php echo($_SERVER["PHP_SELF"]) ?>" method="POST">

        Numero uno: <input type="text" id="numero_uno" name="numero_uno" required><br>
        Numero due: <input type="text" id="numero_due" name="numero_due" required><br>
        AND <input type="radio" name="operazione" value="and" checked> <br>
        OR <input type="radio" name="operazione" value="or"> <br>
        XOR <input type="radio" name="operazione" value="xor"> <br><br>

        <input type="submit" name="submit" value="<-- CALCOLA -->"><br><br>

    </form>
    
</body>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $numero_uno = intval($_POST["numero_uno"]); //Trasformiamo la stringa in un numero intero usando "intval()"
        $numero_due = intval($_POST["numero_due"]);
        $operazione = $_POST["operazione"];

        $numero_uno = decbin($numero_uno);  //Trasformiamo il numero in binario usando "decbin()"
        $numero_due = decbin($numero_due);

        $risultato;

        if ($operazione == "and") {
            $risultato = $numero_uno & $numero_due;
        } elseif ($operazione == "or") {
            $risultato = $numero_uno | $numero_due;
        } elseif ($operazione == "xor") {
            $risultato = $numero_uno ^ $numero_due;
        }

        echo "Risultato in binario: ". $risultato ."<br>";
        echo "Risultato in decimale: ". bindec($risultato); //Trasformiamo il risultato da binario a decimale usando "bindec()"

    }
?>