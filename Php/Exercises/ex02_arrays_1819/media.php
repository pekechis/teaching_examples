<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EJERICIO PARA CALCULAR LA MEDIA DE UN VECTOR</title>
</head>
<body>
    <?php
        //Definición del vector
        $a=[8,12,22,50,7,13,14,15,100];

        //Variable donde iré acumulando la suma
        $total=0;

        //Recorrido del vector
        for ($i=0;$i<sizeof($a);$i++) {
            //Iremos acumulando el elemento actual del recorrido del vector
            $total=$total + $a[$i];
        }

        //Calculo y muestro os resultados
        echo "<p>La media es:".($total/sizeof($a))  ."</p>";
    ?>
</body>
</html>