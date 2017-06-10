<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Accueil</title>



    <!-- Bootstrap core CSS -->

    <link href="../app/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../app/css/Accueil.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- NAVBAR
    ================================================== -->

    <div class="navbar-wrapper">
        <div class="container">
            <nav class="navbar navbar-inverse navbar-wrapper navbar-static-top" data-spy="affix" data-offset-top="1" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="../../index.php">
                            <img class="logo" src="../app/img/logo.png" alt="Logo">
                        </a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="#">Je commande</a>

                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">La communauté<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Nos prestataires et partenaires</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="../La_Communauté/Confiance.html">Ils nous font confiance</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="../La_Communauté/Il_vous_raconte.html">Ils vous racontent</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Nos offres<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Conciergerie volante</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="../Nos_offres/Offre-Entreprise.html">Conciergerie d'entreprise</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="../Nos_offres/Offre-Particulier.html">Conciergerie de quartier</a></li>

                                </ul>
                            </li>
                            <li>
                                <a href="#">Nos services</a>

                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Découvrir<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="../Decouvrir/Qui_somme_nous.html">Qui somme nous !</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="../Decouvrir/L'équipe.html">L'équipe</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Ou nous trouver ?</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Revue de presse</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mon espace<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="Inscription.php?er">Inscription</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Connexion</a></li>
                                </ul>
                    </div>
                </div>
            </nav>

        </div>
    </div>



  <div class="container">
      <div class="login">
        
        <?php if($_GET["mes"]=="inc") {echo "utilisateur ou mot de passe incorect";} ?>
        <div class="container">
            <form action="../../Controler/Verif_connexion.php" method="post">

                <h1>Connexion</h1><br>

                <input type="text" name="user" placeholder="Nom d'utilisateur">
                <input type="password" name="pass" placeholder="Mot de passe">
                <button class="login-submit" onclick="location.href = 'Page-acceuil-admin.php?mes=bvn';">Valider</button>

        </div>
    </div>
  </div>
   <br><br>
    <!-- /END THE FEATURETTES -->
    <!-- FOOTER -->

    <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; Conciergin 2017 &middot; <a href="#">C.G.V.</a> &middot; </p>
    </footer>
    <!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../app/bootstrap/js/jquery-1.9.1.min.js"></script>
    <script src="../app/bootstrap/js/bootstrap.min.js"></script>
    <script src="../app/bootstrap/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../app/bootstrap/js/ie10-viewport-bug-workaround.js"></script>


</body>

</html>
