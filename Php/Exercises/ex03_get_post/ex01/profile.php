<!--
    Author: Juan Diego Pérez @pekechis
    E-mail: contact@jdperez.es
    Description:
    Date: April
    Reference:
    Requires:
-->
<?php
  //Let's Check if I have an id var in the URL Query
  if (!isset($_GET['id'])) {
    //Redirect if $_GET['id'] does not exist in the URL Query
    header("Location: students.html");
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show the profile of the id passed using http GET</title>
    <link rel="stylesheet" type="text/css" href="profile.css">
  </head>
  <body>
      <?php

          //Defining the students data // Usually this kind of data is not created
          //Is recovered from a database
          $data = array(
            array(
              'id' => '22222222X',
              'name' => 'Pepe',
              'lastname' => 'Perez',
              'address' => 'San Jacinto 79',
              'phone' => '955575859',
              'email' => 'student1@iestriana.es',
              'img' => 'anakin.jpg'
            ),
            array(
              'id' => '33333333X',
              'name' => 'Manuel',
              'lastname' => 'Jiménez',
              'address' => 'San Jacinto 79',
              'phone' => '955575859',
              'email' => 'student2@iestriana.es',
              'img' => 'chewie.jpg'
            ),
            array(
              'id' => '44444444X',
              'name' => 'Antonio',
              'lastname' => 'Rodríguez',
              'address' => 'San Jacinto 79',
              'phone' => '955575859',
              'email' => 'student3@iestriana.es',
              'img' => 'han.jpg'
            ),
            array(
              'id' => '11111111X',
              'name' => 'Rosa',
              'lastname' => 'Torres',
              'address' => 'San Jacinto 79',
              'phone' => '955575859',
              'email' => 'student4@iestriana.es',
              'img' => 'leia.jpg'
            ),
            array(
              'id' => '55555555X',
              'name' => 'Jesús',
              'lastname' => 'Moreno',
              'address' => 'San Jacinto 79',
              'phone' => '955575859',
              'email' => 'student5@iestriana.es',
              'img' => 'luke.jpg'
            ),
            array(
              'id' => '66666666X',
              'name' => 'Lidia',
              'lastname' => 'Martínez',
              'address' => 'San Jacinto 79',
              'phone' => '955575859',
              'email' => 'student6@iestriana.es',
              'img' => 'obi_wan.jpg'
            ),
            array(
              'id' => '77777777X',
              'name' => 'María',
              'lastname' => 'García',
              'address' => 'San Jacinto 79',
              'phone' => '955575859',
              'email' => 'student7@iestriana.es',
              'img' => 'padme.jpg'
            ),
            array(
              'id' => '88888888X',
              'name' => 'Ignacio',
              'lastname' => 'Baños',
              'address' => 'San Jacinto 79',
              'phone' => '955575859',
              'email' => 'student8@iestriana.es',
              'img' => 'qui_gon.jpg'
            ),
            array(
              'id' => '9999999X',
              'name' => 'Fernando',
              'lastname' => 'López',
              'address' => 'San Jacinto 79',
              'phone' => '955575859',
              'email' => 'student9@iestriana.es',
              'img' => 'yoda.jpg'
            )
          );

          //Getting the id
          $id= intval($_GET['id'])-1; //As the array start at 0
          if ($id<0 || $id > sizeof($data)) {
            header("Location: students.html");
          }

          $student=$data[$id];
      ?>

      <div id="container">
        <div id="header">
          <div id="profiletag">
                <h5>Profile</h5>
          </div>
        </div>
        <div id="profile">
          <div id="picture">
              <img src="img/<?php echo $student["img"]; ?>">
          </div>
          <div id="data">
            <h3>Contact Information</h3>
               <p><b>Name:</b> <?php echo $student["name"]; ?></p>
               <p><b>Last Name:</b> <?php echo $student["lastname"]; ?></p>
               <p><b>Address:</b> <?php echo $student["address"]; ?></p>
               <p>
                  <img align="center" src="img/phone_icon.png" width="30" height="30">
                  <?php echo $student['phone']; ?>
               </p>
               <p>
                  <img align="center" src="img/mail_icon.png" width="30" height="30">
                  <?php echo $student['email']; ?>
               </p>
          </div>
        </div>
      </div>
  </body>
</html>
