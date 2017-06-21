


<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inscription</title>



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
                                <a href="../Clients/Commande/Je_Commande.php">Je commande</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">La communauté<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="../Clients/La_Communauté/Prestataire.html">Nos prestataires-partenaires</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="../Clients/La_Communauté/Confiance.html">Ils nous font confiance</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Nos offres<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Conciergerie volante</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="../Clients/Nos_offres/Offre-Entreprise.html">Conciergerie d'entreprise</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="../Clients/Nos_offres/Offre-Particulier.html">Conciergerie de quartier</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Nos services</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Découvrir<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="../Clients/Decouvrir/Qui_somme_nous.html">Qui somme nous !</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="../Clients/Decouvrir/L'équipe.html">L'équipe</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="../Clients/Decouvrir/Ou_Nous_Trouver.html">Ou nous trouver ?</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="../Clients/Decouvrir/Revue_Presse.html">Revue de presse</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mon espace<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Inscription</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="Connexion.php?mes">Connexion</a></li>
                                </ul>
                    </div>
                </div>
            </nav>

        </div>
    </div>
<div class="container-fluid">
        <div class="container">
        <div class="row">
            <form action="../../Controleurs/Ajout_Utilisateur.php" method="post" class="col-xs-12 col-md-4 col-md-offset-4">
                <h1>Inscrivez-vous !</h1>
                <FONT color="red">
                    <?php
                switch ($_GET["er"]) {
                    case "mdp-0" :
                        echo ' <h3> Erreur : mot de passe non renseigné </h3><br> ';
                        break;
                    case "mdp-1" :
                        echo ' <h3> Erreur : Confirmation mot de passe </h3><br> ';
                        break;
                    case "nom" :
                        echo ' <h3> Erreur : Nom non renseigné </h3><br> ';
                        break;
                    case "prenom" :
                        echo ' <h3> Erreur : Prenom non renseigné </h3><br> ';
                        break;
                    case "mail" :
                        echo ' <h3> Erreur : Email non renseigné </h3><br> ';
                        break;
                    default :
                        break;
                }
                ?>
                </FONT>
                <div class="form-group">
                    <label for="Nom" class="control-label">Nom</label>
                    <input type="text" name="Nom" id="Nom" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Prenom" class="control-label">Prenom</label>
                    <input type="text" name="Prenom" id="Prenom" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Mail" class="control-label">Email</label>
                    <input type="text" name="Mail" id="Mail" class="form-control">
                </div>
                <div class="form-group">
                    <label for="MDP" class="control-label">Mot de passe</label>
                    <input type="password" name="MDP" id="MDP" class="form-control">
                </div>
                <div class="form-group">
                    <label for="MDP" class="control-label">Confirmer Mot de passe</label>
                    <input type="password" name="MDP-conf" id="MDP-conf" class="form-control">
                </div>
              <div class="form-group">
                    <label for="Addresse" class="control-label">Addresse</label>
                    <input type="text" name="Adresse" id="Addresse" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Code_Postale" class="control-label">Code postale</label>
                    <input type="text" name="Code_Postale" id="Code_Postale" class="form-control">
                </div>
                <br>
                <input type="submit" value="Confimer" class="btn btn-success">
                <a href="../Accueil_Employer.php?mes" class="btn btn-info">annuler</a></td>
            </form>
            </div>
            </div>
        </div>
<br><br>
    <!-- /END THE FEATURETTES -->
    <!-- FOOTER -->
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
