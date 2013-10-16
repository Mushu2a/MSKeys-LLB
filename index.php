<!DOCTYPE html>
<html lang="fr">
    
    <?php
        session_start();
        if($_POST['submit_session']){
            
            echo "submit";
            connect();
            
            sessionConnexion();
        }
    ?>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="MSDN LLB Keys">
    <meta name="author" content="LLB">
    <link rel="shortcut icon" href="favicon.png">
    <title>MSKeys LLB</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
  </head>
  <body>
    <? include "fonctionDB.php" ?>
      < 
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand">MSKeys LLB</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Accueil</a></li>
                <li><a href="importations.php">Importations</a></li>
            </ul>
            <form class="navbar-form navbar-right" method="post">
                <div class="form-group">
                <input name="Login" type="text" placeholder="Login" class="form-control">
                </div>
                <div class="form-group">
                <input name="Password" type="password" placeholder="Password" class="form-control">
                </div>
                <input name="submit_session" type="submit" class="btn btn-success">Sign in</input>
            </form>
        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1>Bienvenue</h1>
            <h3>Veuillez vous authentifier pour avoir accès au clé de Microsoft</h3>
            <? 
            if (($_SESSION['Login']) AND ($_SESSION['Password']))
            {?>
            <!-- A remplir : fenêtres clés -->
            <? } ?>
            <footer>
                <p>© LLB 2013</p>
            </footer>
    </div> <!-- /jumbotron -->
    <!--Bootstrap core JavaScript-->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
