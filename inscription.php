<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> inscription </title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
     <link rel="stylesheet" href="CSS/style_menu.css">
  </head>
  <body>
    <header>
               <form action="chercherProd.php" method="get">
          <div class="containert">
            <div class="logo-container">
             <h3 class="logo"> Brand <span> jawpping  </span> </h3>
            </div>

              <div class="nav-btn">
                    <div class="nav-links">
                     <input type="search" name="motCle" value="" placeholder="chercher un produit , Catégorie ou une marque " style="width:250px ; height: 2.8rem ;  "/>
                      <button type="submit"  class="btn-primary" style=" background-color: orange ; width:150px ; height: 2.8rem ; ">CHERCHER </button>
                     <a href="panier.php">  <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-basket2-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M5.929 1.757a.5.5 0 1 0-.858-.514L2.217 6H.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h.623l1.844 6.456A.75.75 0 0 0 3.69 15h8.622a.75.75 0 0 0 .722-.544L14.877 8h.623a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1.717L10.93 1.243a.5.5 0 1 0-.858.514L12.617 6H3.383L5.93 1.757zM4 10a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm3 0a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm4-1a1 1 0 0 0-1 1v2a1 1 0 1 0 2 0v-2a1 1 0 0 0-1-1z"/>
                    </svg> panier </a>
                  </div>
                    <div class="logo-sign">
                      <a href="login.php" class="btnxt transparents"> Log in </a>
                      <a href="inscription.php" class="btnxt solids"> sign up </a>
                    </div>

              </div>

          </div>
               </form>
      </header>
    <p></p><p></p>
       <div class="container col-md-10 col-md-offset-1">

       <div class="card ">
            <div class="card card-header"> Saisie d'un   utilisateur   </div>
            <div class="card-body">
                <form action="inscription.php" method="POST">

                    <div class="from-group">
                        <label>   Nom</label>
                        <input type="text" name="nom" class="form-control"/>
                        <span> </span>
                    </div>
                    <div class="from-group">
                        <label> Prenom  </label>
                        <input type="text" name="prenom" class="form-control"/>
                        <span> </span>
                    </div>
                    <div class="from-group">
                        <label> password </label>
                        <input type="password" name="pw" class="form-control"/>
                        <span> </span>
                    </div>
                    <div class="from-group">
                        <label> Email </label>
                        <input type="email" name="email" class="form-control"/>
                        <span> </span>
                    </div>
                    <div class="from-group">
                        <label> Phone </label>
                        <input type="text" name="phone" class="form-control"/>
                        <span> </span>
                    </div>
                    <div>

                     <button type="submit" name="Ajouter" class="btn btn-primary">Save</button>
                    </div>
                </form>



       </div>

       </div>

       </div>

   </body>
  </body>
</html>
<?php
   include("connexion.php");
if(!empty($_POST)) {
     $nom= $_POST['nom'] ;
     $prenom = $_POST['prenom'] ;
     $password= $_POST['pw'] ;
     $email = $_POST['email'] ;
    $phone= $_POST['phone'] ;

  if (isset($_POST['Ajouter'])) {


      if($nom==""|| $prenom ==""|| $email==""||$password=="")
        {
          echo '<script>alert(" Verifier votre Champ ..");</script>';
          echo '<meta http-equiv="refresh" content="0;URL=inscription.php">';

        }

      else
        {
             $rqt = mysql_query("INSERT INTO user(nom,prenom,password,email,phone)
                    VALUES ('$nom', '$prenom', '$password', '$email', '$phone') ;  ") ;
                    mysql_query($rqt);

                    echo '<script>alert("Ajouter  effectuée... ");</script>';
                   echo "<meta http-equiv='refresh' content='0;URL=login.php'>";

        }

  mysql_close();
}

}
 ?>
