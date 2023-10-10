<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcolo mcm e MCD</title>
</head>
<body>
    
    <h1>Algoritmo per il calcolo dell'm.c.m. e M.C.D.</h1>

    <form action="<?php echo($_SERVER["PHP_SELF"]) ?>" method="POST">

        Primo numero: <input type="number" id="primo_numero" name="primo_numero" required><br><br>
        Secondo numero: <input type="number" id="secondo_numero" name="secondo_numero" required><br><br>

        <input type="submit" name="submit" value="<-- CALCOLA mcm e MCD -->"><br><br>

    </form>

</body>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $a = $_POST["primo_numero"];
        $b = $_POST["secondo_numero"];

        //Calcolo dell'MCD con l'algoritmo di Euclide
        function calcolaMCD($a, $b) {
            
            if ($a < $b) {
                $temp = $a;
                $a = $b;
                $b = $temp;
            }

            while ($b != 0) {
                $resto = $a % $b;
                $a = $b;
                $b = $resto;
            }

            return $a;
        }

        $mcd = calcolaMCD($a, $b);
        $mcm = ($a * $b)/$mcd;

        echo "Il Massimo Comun Divisore tra $a e $b è uguale a: $mcd <br>";
        echo "Il minimo comune multiplo è: $mcm";

    }
?>