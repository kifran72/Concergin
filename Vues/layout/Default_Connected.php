<!DOCTYPE html>
<html lang="fr">

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=no">
        <title><?php echo $title; ?></title>
        <!-- Bootstrap core CSS -->
        <link href="Vues/app/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="Vues/app/css/Accueil.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>

    <!-- NAVBAR
        ================================================== -->
        <div class="navbar-wrapper" style="BOX-SIZING: border-box;">
            <div class="container" style="height: 50px;">
                <nav class="navbar navbar-inverse navbar-wrapper navbar-static-top" data-spy="affix" data-offset-top="1" role="navigation">
                    <div class="container">
                        <div class="navbar-header" >
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="index.php">
                                <img class="logo" src="Vues/app/img/logo.png" alt="Logo">
                            </a>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="index.php?page=Commande">Je commande</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">La communauté<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index.php?page=Prestataires">Nos prestataires-partenaires</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="index.php?page=Confiance">Ils nous font confiance</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Nos offres<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Conciergerie volante</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="index.php?page=Entreprise">Conciergerie d'entreprise</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="index.php?page=Particulier">Conciergerie de quartier</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="index.php?page=Services">Nos services</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Découvrir<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="index.php?page=Quisommenous">Qui sommes nous !</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="index.php?page=Equipe">L'équipe</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="index.php?page=Trouver">Ou nous trouver ?</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="index.php?page=RevuePresse">Revue de presse</a></li>
                                    </ul>
                                </li>
                                </ul>
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profil<span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="navbar-login">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <p class="text-center">
                                                                <span class="glyphicon glyphicon-user icon-size"></span>
                                                            </p>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <p class="text-left"><?php  echo $_SESSION["Nom"]." " . $_SESSION["Prenom"];?></p>
                                                            <p class="text-left small"><?php echo $_SESSION["mail"]; ?></p>
                                                            <p class="text-left">
                                                                <a href="#" class="btn btn-primary btn-block btn-sm">Actualisé mes informations</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <div class="navbar-login navbar-login-session">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <p>
                                                                <a href="index.php?page=Deconnexion" class="btn btn-danger btn-block">Déconnexion</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

<?php include $content_for_layout; ?>
   

    <!-- /.container -->

</body>
<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="Vues/app/bootstrap/js/jquery-1.9.1.min.js"></script>
    <script src="Vues/app/bootstrap/js/bootstrap.min.js"></script>
    <script src="Vues/app/bootstrap/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="Vues/app/bootstrap/js/ie10-viewport-bug-workaround.js"></script>
    <script src="Vues/app/js/googlemap.js"></script>
    <script src="Vues/app/js/Accueilslider.js"></script>
    <script type="text/javascript" src="Vues/app/js/jssor.slider.min.js"></script>
</html>