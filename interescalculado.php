<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>interes calculado</title>
</head>

<body style="padding: 30px;background-color: #f2f2f2; ">
    <div class="container" style="background-color: white; padding:20px; border-radius: 5px;">
        <h1 style="text-align: center;">Interes calculado</h1>

        <?php
        function fechaEs($fecha)
        {
            $fecha = substr($fecha, 0, 10);
            $numeroDia = date('d', strtotime($fecha));
            $dia = date('l', strtotime($fecha));
            $mes = date('F', strtotime($fecha));
            $anio = date('Y', strtotime($fecha));
            $dias_ES = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");
            $dias_EN = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
            $nombredia = str_replace($dias_EN, $dias_ES, $dia);
            $meses_ES = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
            $meses_EN = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
            $nombreMes = str_replace($meses_EN, $meses_ES, $mes);
            return $nombreMes;
        }
        ?>

        <?php
        $interest = 0;
        $mifecha = "01-03-2022"; //poner un dia del mes que se quiera calcular en ese formato
        $nombre_mes = fechaEs($mifecha);
        $numero_mes = substr($mifecha, 3, 2);
        $numberdays = cal_days_in_month(CAL_GREGORIAN, $numero_mes, 2022);
        for ($i = 1; $i <= $numberdays; $i++) {
            $formula = ((11 / 360) / 100) * $i * 100000;
            echo "Día $i de $nombre_mes, interés calculado: $formula <br>";
            $interest += $formula;
        }
        echo "<br>Total interés $nombre_mes: " . $interest;
        ?>
    </div>
</body>

</html>