<!--
    Author: Juan Diego Pérez @pekechis
    E-mail: contact@jdperez.es
    Description: How to Upload a file to the server using an HTML Form and PHP & Inserting the destination URL in a database record
    Date: January 2017
    Reference: http://www.w3schools.com/php/php_file_upload.asp // https://davidwalsh.name/basic-file-uploading-php
    Requires: HTML & PHP Basic Knowledge &
    file_uploads = On in the php.ini configuration file
-->
<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload an Image to the Server</title>
    <!-- LET'S USE A LITTLE BIT OF BOOTSTRAP -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>
  <body>


          <?php if (!isset($_POST['code']))  :?>

            <div class="container">
              <h1 class="jumbotron">Add a new product</h1>
              <form action="upload_image.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label>Product Code: </label>
                  <input class="form-control" maxlength="6" size="6 "type="text" name="code" required placeholder="Insert the product code (up to 6 chars)"/>
                  <label>Name: </label>
                  <input class="form-control" type="text" name="name" required placeholder="Insert the product name" />
                  <label>Product Image: </label>
                  <input class="form-control" type="file" name="image" required />
                  <label>Product Description: </label>
                  <textarea rows="5" name="description" class="form-control">
                  </textarea>
                </div>
                <input class="btn btn-primary" type="submit" value="Send" />
              </form>
            <div>

          <?php else: ?>

          <?php

                var_dump($_FILES);

                //Temp file. Where the uploaded file is stored temporary
                $tmp_file = $_FILES['image']['tmp_name'];

                //Dir where we are going to store the file
                $target_dir = "img/";

                //Full name of the file.
                $target_file = strtolower($target_dir . basename($_FILES['image']['name']));

                //Can we upload the file
                $valid= true;

                //Check if the file already exists
                if (file_exists($target_file)) {
                  echo "Sorry, file already exists.";
                  $valid = false;
                }

                //Check the size of the file. Up to 2Mb
                if ($_FILES['imagen']['size'] > (2048000)) {
			            $valid = false;
			            echo 'Oops!  Your file\'s size is to large.';
		            }

                //Check the file extension: We need an image not any other different type of file
                $file_extension = pathinfo($target_file, PATHINFO_EXTENSION); // We get the entension
                if ($file_extension!="jpg" && $file_extension!="jpeg" && $file_extension!="png" && $file_extension!="gif") {
                  $valid = false;
                  echo "Only JPG, JPEG, PNG & GIF files are allowed";
                }


                if ($valid) {

                  var_dump($target_file);
                  //Put the file in its place
                  move_uploaded_file($tmp_file, $target_file);

                  echo "PRODUCT ADDED";

                  //Once the file is uploaded we can insert the product record in the product table
                  //NOTE: All the following lines are commented. Uncomment them once you know the real structure of your
                  //database

                  //CREATING THE CONNECTION
                  //$connection = new mysqli("dbhost", "dbuser", "dbpass", "dbname");
                  //$connection->set_charset("uft8");

                  //TESTING IF THE CONNECTION WAS RIGHT
                  //if ($connection->connect_errno) {
                  //    printf("Connection failed: %s\n", $connection->connect_error);
                  //    exit();
                  //}

                  //INSERTING THE NEW PRODUCT
                  $code = $_POST['code'];
                  $description = $_POST['description'];
                  $name = $_POST['name'];

                  $query="INSERT INTO product VALUES(null,'$code','$name','$target_file','$description')";
                  //echo $query;

                  // if ($result = $connection->query($query)) {
                  //
                  //} else {
                  // echo "Wrong Query";
                  // exit();
                  //}


                }
            ?>

          <?php endif ?>


  </body>
</html>
