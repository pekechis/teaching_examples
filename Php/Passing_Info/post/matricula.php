<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php if (!isset($_POST['enviar'])) : ?>

    <form method="post">
     <table>
      <tr>
      <td>
        <fieldset>
            <legend>Primero</legend>
            <p><input type="checkbox" name="primero[]" value="LM" />LM</p>
            <p><input type="checkbox" name="primero[]" value="GBD" />GBD</p>
            <p><input type="checkbox" name="primero[]" value="FOL" />FOL</p>
            <p><input type="checkbox" name="primero[]" value="PAR" />PAR</p>
            <p><input type="checkbox" name="primero[]" value="ISO" />ISO</p>
            <p><input type="checkbox" name="primero[]" value="FH" />LM</p>
        </fieldset>
      </td>
      <td>
        <fieldset>
            <legend>Primero</legend>
            <p><input type="checkbox" name="segundo[]" value="AGBD" />AGBD</p>
            <p><input type="checkbox" name="segundo[]" value="IAW" />IAW</p>
            <p><input type="checkbox" name="segundo[]" value="ENIM" />ENIM</p>
            <p><input type="checkbox" name="segundo[]" value="SRI" />SRI</p>
            <p><input type="checkbox" name="segundo[]" value="SEG" />SEG</p>
            <p><input type="checkbox" name="segundo[]" value="ASO" />ASO    </p>
        </fieldset>
      </td>
      </tr>
      <tr>
        <td colspan="2">
         <p><input type="submit" name="enviar" value="Matricular" /></p>    
        </td>
      </tr>
     </table>
    </form>

    <?php else: ?>
        <?php 
            
            if ((in_array("GBD",$_POST['primero']) && in_array("AGBD",$_POST['segundo'])) ||
                (in_array("PAR",$_POST['primero']) && in_array("SRI",$_POST['segundo'])) || 
                (in_array("ISO",$_POST['primero']) && in_array("ASO",$_POST['segundo'])) ) {
               
                echo "<p>Incompatible</p>";
     
            } else {
                if (isset($_POST['primero'])) {

                    echo "<p>Materias de Primero";
    
                    echo "<ul>";
    
                    for ($i=0;$i<sizeof($_POST['primero']);$i++) {
                        echo "<li>".$_POST['primero'][$i]."</li>";
                    }
                    echo "</ul>";
                } 
    
                if (isset($_POST['segundo'])) {
                    echo "<p>Materias de Segundo";
    
                    echo "<ul>";
    
                    for ($i=0;$i<sizeof($_POST['segundo']);$i++) {
                        echo "<li>".$_POST['segundo'][$i]."</li>";
                    }
                    echo "</ul>";
                } 
            }

        ?>
    <?php endif; ?>
</body>
</html>