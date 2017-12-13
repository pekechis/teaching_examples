<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJ1</title>
    <link rel="stylesheet" type="text/css" href=" ">
    <style>
      span {
        width: 100px;
        display: inline-block;
      }
    </style>
  </head>
  <body>


      <?php if (!isset($_POST["numero"])) : ?>
        <form method="post">
          <input type="number" name="numero" required><br>
          <input type="submit" value="ENVIAR">
        </form>

      <!-- DATA IN $_POST['mail']. Coming from a form submit -->
      <?php else: ?>

        <?php

           function es_primo($numero) {

              if ($numero==1) {
                return true;
              } else {
                for ($i=2;$i<$numero;$i++) {
                  if($numero%$i==0) {
                    return false;
                  }
                }

                return true;
              }
           }

           $num_primos = $_POST['numero'];
           $cont=0;
           $i=1;

           while ($cont<$num_primos) {
             if (es_primo($i)) {
               echo $i."<br>";
               $cont=$cont+1;
             }

             $i=$i+1;

           }

        ?>

      <?php endif ?>

  </body>
</html>
