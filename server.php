<?php
$username = "";
$email = "";
$errors = array();
//connect to database
$db = mysqli_connect('localhost','root','','venteligne');
//if the register button is clicked
if(isset($_POST['register'])){
  $username = mysql_real_escape_string($_POST['$username']);
    $email = mysql_real_escape_string($_POST['$email']);
      $password1 = mysql_real_escape_string($_POST['$password1']);
        $password2 = mysql_real_escape_string($_POST['$password2']);
        // to ensure that from fields are fielled properly
        if (empty($username)) {
          array_push($errors,"username is required");
        }

        if (empty($email)) {
          array_push($errors,"email is required");
        }

        if (empty($password1)) {
          array_push($errors,"password is required");
        }

        if (empty($password2)) {
          array_push($errors,"password is required");
        }
      //if the are no error save user to SQLiteDatabase
      if(count($errors)==0)
      {
        $password = md5($password1);//encrypt password before storing in database(secrity)
        $sql = " INSERT INTO users (username, email, password) VALUES ('$username','$email','$password')";
        mysqli_query($db,$sql);
      }
}

 ?>
