<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programador PHP</title>
</head>

<body style="padding: 30px;background-color: #f2f2f2;">
    <div style="background-color: white; padding:20px; border-radius: 5px;">
        <h1 style="text-align: center;">Programador PHP</h1>
        <h2 style="text-align: right;">Uriel Martínez Flores</h2>

        <div class="container" style="padding: 30px;">

            <?php
            $puesto = "PROGRAMADOR PHP";
            $invertida = strrev($puesto);

            $newstring = "";
            $searchString = " ";
            $replaceString = "";
            $originalString = $puesto;
            $sinespacios = str_replace($searchString, $replaceString, $originalString);
            for ($i = 0; $i < strlen($sinespacios); $i++) {
                $caracter = substr($sinespacios, $i, 1);
                $newstring .= $caracter . " ";
            }

            ?>

            <?php
            echo $newstring . "<br>";
            echo $invertida;
            ?>
        </div>
    </div>
</body>

</html>