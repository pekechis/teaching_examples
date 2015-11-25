<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="matricula.css">
  </head>
  <body>
      <div id="container">
        <?php if (!isset($_POST["firstname"])): ?>

          <!-- FIRST TIME WE LOAD THE PAGE. NOT COMING FROM A POST REQUEST -->
          <!-- NOT COMING FROM A FORM SUBMISSION -->
          <h1>Course Registration</h1>
          <form action="matricula.php" method="post">
            <fieldset id="person">
                <legend>Personal Data</legend>
                <p><label for="firstname">First Name:</label>
                <input type="text" name="firstname" required></p>
                <p><label for="lastname">Last Name:</label>
                <input type="text" name="lastname" required></p>
                <p><label for="address">Address:</label>
                <input type="text" name="address" required></p>
                <p><label for="phone">Phone Number:</label>
                <input type="text" name="phone" required></p>
                <p><label for="email">Email:</label>
                <input type="email" name="email" required></p>
            </fieldset>
            <fieldset>
                <legend>Course</legend>
                  <select name="course">
                    <option value="1st Grade">1st Grade</option>
                    <option value="2nd Grade">2nd Grade</option>
                  </select>
            </fieldset>
            <fieldset id="topics">
              <!-- LET'S CHECK IF WE CAME FROM AN EMPTY TOPICS SELEECTIO -->
              <?php
                 if (isset($_GET['message'])) {
                   echo "<p id='error'>MUST SELECT AL LEAST ONE TOPIC</p>";
                 }
              ?>
              <legend>Topics</legend>
                <div><input type="checkbox" name="topics[]" value="Hardware Fundamentals">Hardware Fundamentals</div>
                <div><input type="checkbox" name="topics[]" value="Databases Management">Databases Management</div>
                <div><input type="checkbox" name="topics[]" value="Networks Planning">Networks Planning</div>
                <div><input type="checkbox" name="topics[]" value="Operating Systems Deployment">Operating Systems Deployment</div>
                <div><input type="checkbox" name="topics[]" value="MarkUp Languages">MarkUp Languages</div>
                <div><input type="checkbox" name="topics[]" value="Web Applications">Web Applications</div>
                <div><input type="checkbox" name="topics[]" value="Internet Services">Internet Services</div>
                <div><input type="checkbox" name="topics[]" value="Security and High Availablity">Security and High Availablity</div>
                <div><input type="checkbox" name="topics[]" value="Databases Administration">Databases Administration</div>
                <div><input type="checkbox" name="topics[]" value="Operating Systems Administration">Operating Systems Administration</div>
            </fieldset>
            <div id="buttons">
              <input type="submit" value="Send"><input type="reset" value="Clear">
            </div>
          </form>
        <?php else: ?>

            <!-- IF NO TOPICS SELECTED BACK TO THE FORM -->
            <?php
              if (sizeof($_POST['topics'])==0) {
                header("Location: matricula.php?message=notopics");
              }
            ?>
            <!-- FORM SUBMITTED -->
            <!-- SHOW THE RESULTS -->
            <h1>Registration Successful</h1>
            <p>
              <b>First Name:</b><?php echo $_POST['firstname']; ?>
            </p>
            <p>
              <b>Last Name:</b><?php echo $_POST['lastname']; ?>
            </p>
            <p>
              <b>Address:</b><?php echo $_POST['address']; ?>
            </p>
            <p>
              <b>Phone Number:</b><?php echo $_POST['phone']; ?>
            </p>
            <p>
              <b>Email:</b><?php echo $_POST['email']; ?>
            </p>
            <h3>Course Selected</h3>
            <p>
              <?php
                echo $_POST['course'];
              ?>
            </p>
            <h3>Topics</h3>
            <?php
                echo "<ul>";
                foreach ($_POST['topics'] as $v) {
                  echo "<li>".$v."</li>";
                }
            ?>
        <?php endif; ?>
      </div>
  </body>
</html>
