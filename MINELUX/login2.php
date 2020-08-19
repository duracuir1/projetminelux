<?php
require('connexionBD.php');
//Create new Users
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];
   $phone = $_POST["phone"];
  $email = $_POST["email"];
 

  
  try{
  $statement = $pdo -> prepare( "INSERT INTO `membres` (username, password, phone, email)
        VALUES ('$username', '$password', '$phone', '$email')");
  $statement->execute(['username'=> $username, 'password' => $password, 'phone'=> $phone, 'email'=> $email]);
     // echo "Insert user: {username}";
    // $id = $pdo->lastInsertId();
     // echo "<script>location.href='clients.php?show=one&id={$id}' </script>";
  } catch (PDOException $e) {
      echo "<h4 style='color: red;'>".$e->getMessage(). "</h4>";
  }

}
?>
<!DOCTYPE html>
<html>
<head>
	<tilte></tilte>
        <meta charset="utf-8"/>
        <meta name="viwport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/login2.css">
        <script src="js/script.js"></script>
        <script src="js/jquery.js"></script>
</head>
    <body id="sign_up_in">
        <header>
        	
                <div class="top-nav">
                <div class="container clearfix">
                    <ul class="nav navbar-nav">
                        <li><a href="#top recherche">Top Recherché</a></li>
                        <li><a href="#top favorites">Top Favorites</a></li>
                        <li><a href="#nouvelles">Nouvelles</a></li>
                    </ul>

                    <div class="pull-left"></div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="connexion.php">S'identifier</a>
                        <a class="btn btn-tertiary" href="signup.html">S'inscrire</a>
                        <a class="btn btn-secondary" href="contact.html">Nous Contater</a>
                    </div>
            
                </div>

                </div>
                </div>
                <div class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <a class="logo" href=""><img src="logo/main-logo.png" class="img-responsive" alt="Cameroun Escortes"></a>
                    </div>
                    <div id="navbar">
                <ul class="nav navbar-nav">
                    <li class="nav-item active"><a class="nav-link" href="/index.html/">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="/escorts/new/">Nouvelle</a></li>
                    <li class="nav-item"><a class="nav-link" href="/escorts/girls/">Filles</a></li>
                    <li class="nav-item"><a class="nav-link" href="/escorts/homme/">Hommes</a></li>
                    <li class="nav-item"><a class="nav-link" href="/escorts/vip/">VIP</a></li>
                    <li class="nav-item"><a class="nav-link" href="/escorts/tours/">Tournées de Ville</a></li>
                    
            </div>
                </div>
                
            </div>
<div class="page-heading">
            <div class="container">
            <div class="row">
                <div class="col-xs-4 back"></div>
                <a href="connexion.php" class="btn btn-black">Retour</a>
                <div class="col-xs-4">
                    <h1 class="page-title">enregistrez-vous</h1>
                </div>
            </div>
            </div>
            </div>
		</header>
        <main class="container">
            <!--<script async="" defer="" src="//www.google.com/recaptcha/api.js"></script>-->
            <!--<script funtion onsubmit(token){ document.getElementById("sign-up").submit();}></script>-->
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3">
                    <form action id="sign-up" class="clearfix" method="post" action="" id="form">
                        <div class="col-xs-10 col-xs-offset-1">
                        <h4 class="title">Inscrivez-vous gratuitement</h4><br>
                        <p class="attention">Veuillez remplir le formulaire suivant et cliquez "S'enregistrer"</p>
							<div class="INSCRIPTION">
                            <input type="hidden" id="user_type" name="user_type" value="2" placeholder="type de compte">
                            <input type="text" id="username" name="username" placeholder="Nom utilisateur" /><br>
                            <input type="password" id="password" name="password" placeholder="Mot de passe"><br>
                            <input type="password" id="password_confirm" name="password_confirm" placeholder="Confirmer le mot de passe"><br>
                            <input type="tel" id="phone" name="phone" min="9" max="12"  placeholder="Numero Telephone"><br>
                            <input type="text" id="email" name="email" placeholder="Courrier*"/><br>
                            <input type="text" id="email" name="email2"  placeholder="Confirmer*">
                        </div><br>
                        <div class="custom-checkbox">
                            <input type="checkbox" id="checkterm" name="terms" value="1">
                            <label for="checkterm">"J'ai lu et j'accepte les" <a target="_blank" id="terms-link" href="terme_et_conditions.html"> Conditions generales</a>
                            </label>
                        </div>
                        <br>
                        <div style="margin:0 auto;text-align: center;"><br>
                            <input class="btn btn-primary" type="submit" name="forminscription" value="S'inscrire">
                            <!--<button class="btn btn-primary" name="forminscription">S'inscrire
                            </button>-->
                        </div>
                        </div>
                    </div>
                    </form>
                             <?php
                     if(isset($erreur)) {
                   echo '<font color="blue">'.$erreur."</font>";
                }
                 ?>
                </div>
            </div>
        </main>
        <footer>
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-4">
                        <svg viewBox="0 0 64 64">
                        <use xlink:href="#icon-real-photos"></use>
                        </svg>
                        <h4 class="line">Photo des Minettes réelles</h4>
                    </div>
                    <div class="col-xs-4">
                        <svg viewBox="0 0 64 64">
                        <use xlink:href="#icon-discretion-guaranteed"></use>
                        </svg>
                        <h4 class="line">Discretion assurée</h4>
                    </div>
                    <div>
                        <div class="col-xs-4">
                            <svg viewBox="0 0 64 64">
                            <use xlink:href="#icon-trusted-website"></use>
                            </svg>
                            <h4 class="line">Minette girl Cameroun</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>