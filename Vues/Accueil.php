<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Accueil</title>
        <!-- Bootstrap core CSS -->
        <link href="app/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="app/css/Accueil.css">
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
            <div class="container">
                <nav class="navbar navbar-inverse navbar-wrapper navbar-static-top" data-spy="affix" data-offset-top="1" role="navigation">
                    <div class="container">
                        <div class="navbar-header" style="margin-right: 0px; margin-left: 0px;">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="../index.php">
                                <img class="logo" src="app/img/logo.png" alt="Logo">
                            </a>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="Clients/Commande/Je_Commande.php">Je commande</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">La communauté<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Nos prestataires-partenaires</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="Clients/La_Communauté/Confiance.html">Ils nous font confiance</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="Clients/La_Communauté/Il_vous_raconte.html">Ils vous racontent</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Nos offres<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Conciergerie volante</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="Clients/Nos_offres/Offre-Entreprise.html">Conciergerie d'entreprise</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="Clients/Nos_offres/Offre-Particulier.html">Conciergerie de quartier</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Nos services</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Découvrir<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="Clients/Decouvrir/Qui_somme_nous.html">Qui sommes nous !</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="Clients/Decouvrir/L'équipe.html">L'équipe</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="Clients/Decouvrir/Ou_Nous_Trouver.html">Ou nous trouver ?</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="Clients/Decouvrir/Revue_Presse.html">Revue de presse</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mon espace<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="Connexion/Inscription.php?er">Inscription</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="Connexion/Connexion.php?mes">Connexion</a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="container">
                    <center>
                        <h1>Une conciergerie citoyenne verte et solidaire</h1>
                    </center>
                  <center>
                        <p>Basée à Fontainebleau, Easyday est une entreprise de service de proximité qui offre aux salariés des entreprises et aux usagers de la gare de Fontainebleau-Avon, l’occasion de résoudre les tracasseries du quotidien, et les demandes relevant de la sphère privée.</p>
                  </center>
                </div>
                <?php
                switch ($_GET["mes"]) {
                case "bvn":
                echo '  <div class="alert alert-success">
                    <strong>Bienvenue !</strong> Bonne recherche
                </div>';
                break;
                
                case "utok":
                echo 'Utilisateur Créé';
                break;
                case "fail-ut":
                echo 'Echec Création Utilisateur';
                break;
                case "ann":
                echo 'Annulation';
                break;
                } ?>
                <!-- Marketing messaging and featurettes
                ================================================== -->
                <!-- Wrap the rest of the page in another container to center all the content. -->
                <div class="container">
                    <div class="row" id="commande-container">
                        <a href="Clients/Commande/Je_Commande.php">
                            <img class="img-responsive" id="commande-img" src="app/img/Fond.jpg" alt="Je commande">
                            <a/>
                            </div>
                            <div class="row">
                                <div class="col-md-2" style="display: inline; text-align: center;">
                                    <a href="#">
                                        <center>
                                        <img class="logo-service img-responsive" src="app/img/Epicerie.png" alt="Logo">
                                        </center>
                                    </a>
                                    <p>Epicerie</p>
                                </div>
                                <div class="col-md-2" style="display: inline; text-align: center;">
                                    <a href="#">
                                        <center>
                                        <img class="logo-service img-responsive" src="app/img/Lavage_Auto.png" alt="Logo">
                                        </center>
                                    </a>
                                    <p>Lavage auto</p>
                                </div>
                                <div class="col-md-2" style="display: inline; text-align: center;">
                                    <a href="#">
                                        <center>
                                        <img class="logo-service img-responsive" src="app/img/Cordonnerie.png" alt="Logo">
                                        </center>
                                    </a>
                                    <p>Cordonnerie</p>
                                </div>
                                <div class="col-md-2" style="display: inline; text-align: center;">
                                    <a href="#">
                                        <center>
                                        <img class="logo-service img-responsive" src="app/img/Cordonnerie.png" alt="Logo">
                                        </center>
                                    </a>
                                    <p>Pressing</p>
                                </div>
                                <div class="col-md-2" style="display: inline; text-align: center;">
                                    <a href="#">
                                        <center>
                                        <img class="logo-service img-responsive" src="app/img/Panier_Legumes.png" alt="Logo">
                                        </center>
                                    </a>
                                    <p>Panier de légumes</p>
                                </div>
                                <div class="col-md-2" style="display: inline; text-align: center;">
                                    <a href="#">
                                        <center>
                                        <button type="button" class="logo-service btn btn-default btn-lg">
                                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                        </button>
                                        </center>
                                    </a>
                                    <p>Plus de services</p>
                                </div>
                            </div>
                        </div>
                        
                        
                        <hr class="featurette-divider">
                        <center style="margin-bottom: 50px;">
                        <h1>Les actualités de la semaine</h1>
                        </center>
                        <!-- Use a container to wrap the slider, the purpose is to enable slider to always fit width of the wrapper while window resize -->
                        
                        
                        <!-- Carousel
                        ================================================== -->
                        <div class="container">
                            <div class="container">
                                <br>
                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel" data-slide-to="1"></li>
                                        <li data-target="#myCarousel" data-slide-to="2"></li>
                                        <li data-target="#myCarousel" data-slide-to="3"></li>
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item active">
                                            <img src="app/img/home/01.jpg" alt="Chania" width="460" height="345">
                                            <div class="carousel-caption">
                                               <!-- Some text -->
                                                
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img src="app/img/home/02.jpg" alt="Chania" width="460" height="345">
                                            <div class="carousel-caption">
                                               <!-- Some text -->
                                            </div>
                                        </div>
                                        
                                        <div class="item">
                                            <img src="app/img/home/03.jpg" alt="Flower" width="460" height="345">
                                            <div class="carousel-caption">
                                               <!-- Some text -->
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img src="app/img/home/04.jpg" alt="Flower" width="460" height="345">
                                            <div class="carousel-caption">
                                             <!-- Some text -->
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <br><br><br><br><br>
                        <br><br><br><br><br>
                        
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
                        <script src="app/bootstrap/js/jquery-1.9.1.min.js"></script>
                        <script src="app/bootstrap/js/bootstrap.min.js"></script>
                        <script src="app/bootstrap/js/docs.min.js"></script>
                        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
                        <script src="app/bootstrap/js/ie10-viewport-bug-workaround.js"></script>
                        <!-- jssor slider scripts-->
                        <script type="text/javascript" src="app/bootstrap/js/jssor.slider.min.js"></script>
                        
                    </body>
                </html>