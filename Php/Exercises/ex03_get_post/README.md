#Exercise 3
## Using $_GET and $_POST for passing info between pages


1. Passing Information using GET

  Create students.htmls file

  This file would show an students table containing personal info about each one of the students.

  The columns to be showed are: ID, First Name, Last Name, Address, Phone and Email

  Once we click on the id we'll pass the id to profile.php.

  Profile php will show a personal datasheet of the student selected with a profile photo. Something like this:

  ![Student Profile Example](https://github.com/pekechis/teaching_examples/blob/master/Php/Exercises/ex03_get_post/ex01/img/example.jpg "Profile Example")


2. We're going to simulate a registration process.

  * Login.php

      When opened for the first time this web will show as a modal login dialog. Use [jQUery UI](https://jqueryui.com/dialog/) for this.

      User "Pepe" and password "12345" will produce a successful login that redirects to matricula.php. In other cases a "Login Incorrect" message would be shown in the same form

  * Matricula.php

     Shows a registration form asking the user for:

        * Personal Data:ID,First Name, Last Name, Address, Phone and Email
        * Course: 1º ASIR or 2º ASIR
        * List of Topics to be selected by the sutdent


      Once the form is sumbitted the browser will show a summary of the registration process. If no topics are selected we will notified and returned to the registration process.
