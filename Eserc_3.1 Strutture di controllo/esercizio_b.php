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
                $t = $a;
                $a = $b;
                $b = $t;
            }

            while ($b != 0) {
                $t = $b;
                $b = $a % $b;
                $a = $t;
            }

            return $a;
        }

        $mcd = calcolaMCD($a, $b);
        $mcm = ($a * $b)/$mcd;

        echo "<b>Il Massimo Comun Divisore tra $a e $b è uguale a: $mcd </b><br>";
        echo "<b>Il minimo comune multiplo è: $mcm </b>";

    }
?>