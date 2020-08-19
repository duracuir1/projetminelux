<?php
require('config.php');
session_start();
if (isset($_POST['username'])){
  $username = stripslashes($_REQUEST['username']);
  $username = mysqli_real_escape_string($conn, $username);
  $_SESSION['username'] = $username;
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($conn, $password);
    $query = "SELECT * FROM `membres` WHERE username='$username' 
  and password='$password'";
  
  $result = mysqli_query($conn,$query) or die(mysql_error());
  
  if (mysqli_num_rows($result) == 1) {
    $user = mysqli_fetch_assoc($result);
    // vérifier si l'utilisateur est un administrateur ou un utilisateur
      header('location:panel.php');
  }else{

     $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
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
        <link rel="stylesheet" href="css/main.css">
        <script src="js/script.js"></script>
</head>
    <body id="home">
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
                        <a class="btn btn-primary" href="login.html">S'identifier</a>
                        <a class="btn btn-tertiary" href="login2.php">S'inscrire</a>
                        <a class="btn btn-secondary" href="contact.html">Nous Contacter</a>
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
                <a href="/" class="btn btn-black">Retour</a>
                <div class="col-xs-4">
                    <h1 class="page-title">Espace Privé</h1>
                </div>
            </div>
            </div>
            </div>
		</header>
		<main class="container">
            <div class="row">
                <div class="col-xs-8 col-xs-offset-2">
                    <form action id="sign-in" class="clearfix" method="post">
                        <div class="col-xs-6 col-xs-offset-6">
                            <h4 class="title">S'identifier à votre compte</h4>
                            <p class="attention">Remplissez simplement le formulaire ci-dessous</p>
                            <div class="form-group input">
                            <input type="text" id="username" name="username" class="form-control" placeholder="Nom d'utilisateur">
                            </div>
                            <div>
                            <div class="form-group input">
                            <input type="password" id="password" name="password" class="form-control" placeholder="Mot de Passe">
                            </div>
                        </div>
                        <div class="custom-checkbox">
                            <input type="checkbox" id="rememberMe" name="checkbox" value="1">
                            <label for="rememberMe">Souvenez-vous de moi</label>
                        </div>
                        <br>
                        <input type="submit" value="S'identifier" class="btn btn-primary">
                        <?php if (! empty($message)) { ?>
            <p class="errorMessage"><?php echo $message; ?></p>
        <?php } ?>
                        <p class="spad"><a href="/auth/forgot">Mot de passe oublié?</a>
                            <br></p>
                        <p class="spad"><a href="/auth/signup">Inscrivez-vous gratuitement</a>
                            </p>
                        <p class="spad">Si vous avez encore des problemes n'hésitez pas à :<a href="/contact" id="feelback"><b><span>Nous contater</span></br></a></p>
					<input type="hidden" id="csrf" name="csrf" value="eG1rNEgrZHZyZ0JBUFB4aUlRZTFjZz09">
                        </div>
                    </form>
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