<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mostrar el mayor y el menor elemento de un vector</title>

</head>
<body>
    <?php
        //Definición del vector
        $a=[8,12,22,50,7,13,14,15,100];

        //Inicialmente el mayor será el primer elemento
        $mayor=$a[0];

        //Recorro el vector aunque ya no miro el primer elemento. Empiezo en índice 1
        for ($i=1;$i<sizeof($a);$i++) {
            //Comparo el elemento en el que estoy con el mayor que tengo. Si es mayor, el nuevo mayor será el elemento
            //que estoy tratando al recorrer el vector
            if ($a[$i]>$mayor) {
                $mayor=$a[$i];
            }
        }

        //Muestro cuál es el mayor después de recorrer el vector entero
        echo "<p>EL MAYOR ES: $mayor</p>";

        //Inicialmente el menor será el primer elemento
        $menor=$a[0];

        //Recorro el vector aunque ya no miro el primer elemento. Empiezo en índice 1
        for ($i=1;$i<sizeof($a);$i++) {
            //Comparo el elemento en el que estoy con el menor que tengo. Si es menor, el nuevo menor será el elemento
            //que estoy tratando al recorrer el vector
            if ($a[$i]<$menor) {
                $menor=$a[$i];
            }
        }

        //Muestro cuál es el menor después de recorrer el vector entero
        echo "<p>EL MENOR ES: $menor</p>";
    ?>
    
</body>
</html>