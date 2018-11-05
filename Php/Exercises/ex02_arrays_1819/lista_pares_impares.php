<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CONSTRUIR LISTA DE PARES E IMPARES A PARTIR DE UN VECTOR DE ENTEROS</title>
</head>
<body>
    <?php
        $v=[7,13,15,22,16,14,30,8,10];

        //USANDO DOS BUCLES

        echo "<h3>Números Pares</h3>";
        //Abro lista de pares
        echo "<ul>";
        //Recorreo el vector completo
        for ($i=0;$i<sizeof($v);$i++) {
            //Sólo añado li si el elementos es par
            if ($v[$i]%2==0) {
                echo "<li>".$v[$i]."</li>";
            }
        }
        //Cierro de pares
        echo "</ul>";

        echo "<h3>Números Impares</h3>";
        //Abro lista de impares
        echo "<ul>";
        //Recorro el vector completo
        for ($i=0;$i<sizeof($v);$i++) {
            //Solo añado li si el elemento es impar
            if ($v[$i]%2!=0) {
                echo "<li>".$v[$i]."</li>";
            }
        }
        //Cierro lista de impartes
        echo "</ul>";


        //CON UN SÓLO RECORRIDO DEL VECTRO

        //Variables donde iré acumulando los distintos li de las listas
        $pares="";
        $impares="";

        //Recorro el vector entero
        for ($i=0;$i<sizeof($v);$i++) {
            //Si es impar acumulo un li en la cadena que pondré en la lista de impartes
            if ($v[$i]%2!=0) {
                $impares=$impares."<li>".$v[$i]."</li>";
            
            } else {
                //Si es para hago lo mismo pero en la otra lista
                $pares=$pares."<li>".$v[$i]."</li>";
            }
        }

        echo "<h3>Números Impares</h3>";
        echo "<ul>";
        //Todos los li correspondientes entre la apertura y cierre de lista
        echo $impares;
        echo "</ul>";

        echo "<h3>Números Pares</h3>";
        //Todos los li correspondientes entre la apertura y cierre de lista
        echo "<ul>";
        echo $pares;
        echo "</ul>";
    ?>
</body>
</html>