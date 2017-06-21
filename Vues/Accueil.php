

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=no">
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
            <div class="container" style="height: 50px;">
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
                                        <li><a href="Clients/La_Communauté/Prestataire.html">Nos prestataires-partenaires</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="Clients/La_Communauté/Confiance.html">Ils nous font confiance</a></li>
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
                <div class="container" style="height: 220px; color: white;">
                    <br><br>
                    <center>
                    <strong>
                    <h1 style="margin-top: 20px;">Une conciergerie citoyenne verte et solidaire</h1>
                    </strong>
                    </center>
                    <br>
                    <center>
                    <h4>Basée à Fontainebleau, Conciergin est une entreprise de service de proximité qui offre aux salariés des entreprises et aux usagers de la gare de Fontainebleau-Avon, l’occasion de résoudre les tracasseries du quotidien, et les demandes relevant de la sphère privée.</h4>
                    </center>
                    <img class="img-responsive" src="app/img/Accueil.jpg" alt="logo" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: auto; width: 100% !important ; height: 50%; z-index: -1; margin-right: 0 auto;">
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
                <div class="container" style="margin-top: 280px;">
                    <div class="row">
                        <div class="container col-xs-12 col-md-6 col-lg-6">
                            <div class="row" id="commande-container">
                                <a href="Clients/Commande/Je_Commande.php">
                                    <img class="img-responsive" id="commande-img" src="app/img/Fond.jpg" alt="Je commande">
                                    <a/>
                                    </div>
                                    <div class="row">
                                        <div class="row">
                                            <div class="col-md-4" style="display: inline; text-align: center;">
                                                <a href="#">
                                                    <center>
                                                    <img class="logo-service img-responsive" src="app/img/Epicerie.png" alt="Logo">
                                                    </center>
                                                </a>
                                                <p>Epicerie</p>
                                            </div>
                                            <div class="col-md-4" style="display: inline; text-align: center;">
                                                <a href="#">
                                                    <center>
                                                    <img class="logo-service img-responsive" src="app/img/Lavage_Auto.png" alt="Logo">
                                                    </center>
                                                </a>
                                                <p>Lavage auto</p>
                                            </div>
                                            <div class="col-md-4" style="display: inline; text-align: center;">
                                                <a href="#">
                                                    <center>
                                                    <img class="logo-service img-responsive" src="app/img/Cordonnerie.png" alt="Logo">
                                                    </center>
                                                </a>
                                                <p>Cordonnerie</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4" style="display: inline; text-align: center;">
                                                <a href="#">
                                                    <center>
                                                    <img class="logo-service img-responsive" src="app/img/Cordonnerie.png" alt="Logo">
                                                    </center>
                                                </a>
                                                <p>Pressing</p>
                                            </div>
                                            <div class="col-md-4" style="display: inline; text-align: center;">
                                                <a href="#">
                                                    <center>
                                                    <img class="logo-service img-responsive" src="app/img/Panier_Legumes.png" alt="Logo">
                                                    </center>
                                                </a>
                                                <p>Panier de légumes</p>
                                            </div>
                                            <div class="col-md-4" style="display: inline; text-align: center;">
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
                                </div>
                                <div class="container">
                                    <div class="col-xs-12 col-md-6 col-lg-6">
                                        
                                        <center>
                                        <h1 style="margin-top: 80px;">Les actualités de la semaine</h1>
                                        <br>
                                        </center>
                                        <center>
                                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FvoieA%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <hr class="featurette-divider">
                        <!-- Use a container to wrap the slider, the purpose is to enable slider to always fit width of the wrapper while window resize -->
                    </div>
                    <!-- Carousel
                    ================================================== -->
                    <div class="container">
                        <div class="container">
                            <br><br><br>
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
                    <br><br><br>
                    
                    <hr class="featurette-divider">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                
                                <button type="button" onclick="location.href='Clients/Nos_offres/Offre-Entreprise.html';" class="btn btn-default btn-lg" style="display: inline; text-align: center; height: 250px; width: 250px;" ><span class="glyphicon glyphicon-cog" aria-hidden="true"></span><p>Entreprises</p>
                                </button>
                                
                            </div>
                            <div class="col-md-3">
                                <button type="button" onclick="location.href='Clients/Nos_offres/Offre-Particulier.html';" class="btn btn-default btn-lg" style="display: inline; text-align: center; height: 250px; width: 250px;" ><span class="glyphicon glyphicon-check" aria-hidden="true"></span><p>Particuliers</p>
                                </button>
                            </div>
                            <div class="col-md-3">
                                <button type="button" onclick="location.href='Clients/Decouvrir/Qui_somme_nous.html';" class="btn btn-default btn-lg" style="display: inline; text-align: center; height: 250px; width: 250px;" ><span class="glyphicon glyphicon-search" aria-hidden="true"></span><p>Découvir</p>
                                </button>
                            </div>
                            <div class="col-md-3">
                            <button type="button" onclick="location.href='Clients/La_Communauté/Prestataire.html';" class="btn btn-default btn-lg" style="display: inline; text-align: center; height: 250px; width: 250px;" ><span class="glyphicon glyphicon-ok" aria-hidden="true"></span><p>Prestataire</p>
                                </button>
                            </div>
                        </div>
                        <br>
                    </div>
                    <br><br>
                    <div class="container">
                        <center>
                        <iframe width="500" height="400" src="https://www.youtube.com/embed/oxCCLx4ym5Y" frameborder="0" allowfullscreen></iframe>
                        </center>
                    </div>
                    <br><br><br><br><br>
                    <br><br><br><br><br>
                    <!-- /END THE FEATURETTES -->
                    <!-- FOOTER -->
                    <footer>
                        <p class="pull-right"><a href="#">Back to top</a></p>
                        <p>&copy; Conciergin 2017 &middot; <a href="Clients/CGV/CGV.html">C.G.V.</a> &middot; </p>
                    </footer>
                    <!-- /.container -->
                </body>
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
            </html>