<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Accueil</title>



    <!-- Bootstrap core CSS -->

    <link href="vue/app/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="vue/app/css/Accueil.css">

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
            <nav class="navbar navbar-inverse navbar-wrapper navbar-static-top" data-spy="affix" data-offset-top="0" role="navigation" style="margin-bottom: 50px;">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php">
                            <img class="logo" src="vue/app/img/logo.png" alt="Logo">
                        </a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="#">Nos services</a>

                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">La communauté<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Nos prestataires</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Nos partenaires</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Ils nous font confiance</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Ils vous raconte</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Nos offres<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Conciergerie d'entreprise</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Conciergerie de quartier</a></li>

                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Qui sommes nous !<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">L'équipe</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Revue de presse</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Ou nous trouver ?</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Qu'est ce qu'une conciergerie solidaire ?</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mon espace <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Inscription</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Connexion</a></li>
                                </ul>
                    </div>
                </div>
            </nav>

        </div>
    </div>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->


    <div class="container">
        <div class="container" id="commande-container" style="margin-bottom: 20px; height: 200px; width: 200px;">
            <a href="#">
                <img class="img-responsive" id="commande-img" src="vue/app/img/Fond.jpg" style="margin: 0 auto;" alt="Je commande"><a/>
        </div>
        <div class="container">
        <div class="row">
           
            <div class="col-md-2">
                <a href="#">
                    <img class="logo-service img-responsive" src="vue/app/img/Epicerie.png" alt="Logo">
                </a>
            </div>
            <div class="col-md-2">
                <a href="#">
                    <img class="logo-service img-responsive" src="vue/app/img/Lavage_Auto.png" alt="Logo">
                </a>
            </div>
            <div class="col-md-2">
                <a href="#">
                    <img class="logo-service img-responsive" src="vue/app/img/Cordonnerie.png" alt="Logo">
                </a>
            </div>
            <div class="col-md-2">
                <a href="#">
                        <img class="logo-service img-responsive" src="vue/app/img/Pressing.png" alt="Logo">
                </a>
            </div>

            <div class="col-md-2">
                <a href="#">
                        <img class="logo-service img-responsive" src="vue/app/img/Panier_Legumes.png" alt="Logo">
                </a>

            </div>
            <div class="col-md-2">
                <a href="#">
                    <button type="button" class="btn btn-default btn-lg">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </button>
                </a>
            </div>
        </div>
            
        </div>
    </div>
    </div>

    <hr class="featurette-divider">
    <div class="container marketing">

        <!-- bootstrap carousel -->
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active srle">
                    <img class="featurette-image img-responsive" data-src="holder.js/1040x500/auto" alt="Generic placeholder image">
                </div>
                <div class="item">
                    <img class="featurette-image img-responsive" data-src="holder.js/1040x500/auto" alt="Generic placeholder image">
                </div>
                <div class="item">
                    <img class="featurette-image img-responsive" data-src="holder.js/1040x500/auto" alt="Generic placeholder image">
                </div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
            <div class="controles">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
            </div>
        </div>

    </div>

    <hr class="featurette-divider">


    <div class="container marketing">


        <div class="container">
            <div class="featurette">
                <div class="Commande">
                    <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
                </div>
            </div>
        </div>
    </div>


    <hr class="featurette-divider">


    <div class="container marketing">
        <div class="container">
            <div class="featurette">
                <div class="Commande">
                    <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">

                </div>
            </div>
        </div>
    </div>


    <hr class="featurette-divider">


    <div class="container">
        <div class="featurette">
            <div class="Commande">
                <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
            </div>
        </div>
    </div>

    <!-- /END THE FEATURETTES -->
    <!-- FOOTER -->

    <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; Conciergein 2017 &middot; <a href="#">C.G.V.</a> &middot; </p>
    </footer>
    </div>
    <!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="vue/app/bootstrap/js/jquery-1.9.1.min.js"></script>
    <script src="vue/app/bootstrap/js/bootstrap.min.js"></script>
    <script src="vue/app/bootstrap/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="vue/app/bootstrap/js/ie10-viewport-bug-workaround.js"></script>


</body>

</html>
