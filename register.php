
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>register en Php</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="header">
      <h2>Register</h2>
    </div>

    <form  action="register.php" method="post">
      <!---------display validation error here --------->
      <?php include ("errors.php"); ?>
      <div class="input-group">
        <label>username</label>
        <input type="text" name="username" >
      </div>
      <div class="input-group">
        <label>email</label>
        <input type="text" name="email" >
      </div>
      <div class="input-group">
        <label>password</label>
        <input type="text" name="password1" >
      </div>
      <div class="input-group">
        <label>confirm password</label>
        <input type="text" name="password2" >
      </div>
      <div class="input-group">
    <button type="submit" name="register" class="btn">Register</button>
      </div>
<p>already a member ? <a href="login.php">sign in</a> </p>
    </form>


  </body>
</html>
<?php
   include("connexion.php");
if(!empty($_POST)) {
     $username= $_POST['username'] ;
     $email = $_POST['email'] ;
     $password1= $_POST['password1'] ;
     $password2= $_POST['password2'] ;
  if (isset($_POST['Ajouter'])) {


      if($username==""|| $email ==""|| $password1==""||$password2=="")
        {
          echo '<script>alert(" Verifier votre Champ ..");</script>';
          echo '<meta http-equiv="refresh" content="0;URL=inscription.php">';

        }

      else
        {
             $rqt = mysql_query("INSERT INTO user(nom,prenom,password,email,phone)
                    VALUES ('$username', '$email', '$password1', '$password2') ;  ") ;
                    mysql_query($rqt);

                    echo '<script>alert("Ajouter  effectuée... ");</script>';
                   echo "<meta http-equiv='refresh' content='0;URL=login.php'>";

        }

  mysql_close();
}

}
 ?>
