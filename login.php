<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>register en Php</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="header">
      <h2>login</h2>
    </div>
    <form  action="login.php" method="post">
      <div class="input-group">
        <label>username</label>
        <input type="text" name="username" >
      </div>

      <div class="input-group">
        <label>password</label>
        <input type="text" name="password1" >
      </div>

      <div class="input-group">
    <button type="submit" name="login" class="btn">login</button>
      </div>
<p>not yet a member ? <a href="register.php">sign up</a> </p>
    </form>


  </body>
</html>
