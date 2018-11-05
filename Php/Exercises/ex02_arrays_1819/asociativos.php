<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EEJERCICIOS CON VECTORES ASOCIATIVOS</title>
</head>
<body>
    <?php
        $v=["nombre"=> "Juan", "edad" => 25, 
        "direccion"=> "San Jacinto 79"];

        echo "<table><tr>";        

        foreach ($v as $k => $valor) {
            echo "<th>".$k."</th>";
        }
        echo "</tr><tr>";
        foreach ($v as $valor) {
            echo "<td>".$valor."</td>";
        }
        echo "</table></tr>";

        echo "<table>";
        foreach ($v as $k => $valor) {
            echo "<tr><td>$k</td><td>$valor</td></tr>";
        }
        echo "</table>";

        $v1=[["nombre"=> "Juan", "edad" => 25, 
        "direccion"=> "San Jacinto 79"],
        ["nombre"=> "Pepe", "edad" => 25, 
        "direccion"=> "San Jacinto 80"],
        ["nombre"=> "Rosa", "edad" => 25, 
        "direccion"=> "San Jacinto 81"]];

        echo "<table>";
        echo "<tr><th>Nombre</th><th>Edad</th><th>Dirección</th></tr>";
        for ($i=0;$i<sizeof($v1);$i++) {
            echo "<tr>";
            foreach($v1[$i] as $valor)  {
                echo "<td>$valor</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
    
</body>
</html>