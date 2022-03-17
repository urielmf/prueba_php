<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arreglos</title>
</head>

<body style="padding:30px;background-color: #f2f2f2; ">
    <div class="container" style="background-color: white; padding:20px; border-radius: 10px;">

        <h1 style="text-align: center;">Arreglos</h1>
        <h2 style="text-align: right;">Uriel Martínez Flores</h2>
        <?php
        $totaldias = 0;
        $numberdaysofm = "";
        for ($i = 0; $i < 12; $i++) {
            $mes = 1 + $i;
            $dateObj   = DateTime::createFromFormat('!m', $mes);
            $monthName = $dateObj->format('F'); // March
            $numberdays = cal_days_in_month(CAL_GREGORIAN, $mes, 2022); // 31
            foreach (range(1, $numberdays) as $cadenanumeros) {
                $numberdaysofm .= $cadenanumeros . " ";
                $totaldias++;
            }
            echo $monthName . ": " . $numberdaysofm . "<br/>";
            $numberdaysofm = "";
        }
        echo "<br><br><br>";
        echo "total meses " . $mes . "<br><br>";
        echo "total dias: " . $totaldias;
        ?>
    </div>

</body>

</html>