<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>



    <!-- Bootstrap core CSS -->

    <link href="Vues/app/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="Vues/app/css/Accueil.css">

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
                                    <a href="#">Nos services</a>
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
    <script src="Vues/app/bootstrap/js/jquery-1.9.1.min.js"></script>
    <script src="Vues/app/bootstrap/js/bootstrap.min.js"></script>
    <script src="Vues/app/bootstrap/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="Vues/app/bootstrap/js/ie10-viewport-bug-workaround.js"></script>
</body>
<script>
    jQuery(function($) {
    // Asynchronously Load the map API
    var script = document.createElement('script');
    script.src = "//maps.googleapis.com/maps/api/js?key=AIzaSyCPQ2QXlHldfVz013YhkCluTmFMnLbF8ZM&sensor=false&callback=initialize";
    document.body.appendChild(script);
    });
    function initialize() {
    var map;
    var bounds = new google.maps.LatLngBounds();
    var mapOptions = {
    mapTypeId: 'roadmap'
    };
    
    // Display a map on the page
    map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
    map.setTilt(45);
    
    // Multiple Markers
    var markers = [
    ['77210 Avon, France', 48.416572,2.7265199999999368],
    ['77210 Samois-sur-Seine, France', 48.4222447524136,2.736743688583374],
    ['77210 Avon, France', 48.420400628583806,2.7376502752304077]
    ];
    
    // Info Window Content
    var infoWindowContent = [
    ['<div class="info_content">' +
        '<h3>Gare de Fontainebleau-Avon</h3>' +
        '<p>Situé sur le quai de la gare de Fontainebleau-Avon, le comptoir de Concierg’In vous accueille du lundi au vendredi, de 6h30 à 9h30 et de 16h30 à 19h30.</p>' +        '</div>'],
        ['<div class="info_content">' +
            '<h3>Corning S.A.S.</h3>' +
            "<p>N'hésitter pas bénéficer d'une conciergerie traditionnele au sein de votre entreprise</p>" +
        '</div>'],
        ['<div class="info_content">' +
            "<h3>Centre d'affaire ODEON</h3>" +
            "<p>Retrouver conciergin dans le hall du centre d'affaire</p>" +
        '</div>']
        ];
        
        // Display multiple markers on a map
        var infoWindow = new google.maps.InfoWindow(), marker, i;
        
        // Loop through our array of markers & place each one on the map
        for( i = 0; i < markers.length; i++ ) {
        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
        bounds.extend(position);
        marker = new google.maps.Marker({
        position: position,
        map: map,
        title: markers[i][0]
        });
        
        // Allow each marker to have an info window
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
        infoWindow.setContent(infoWindowContent[i][0]);
        infoWindow.open(map, marker);
        }
        })(marker, i));
        // Automatically center the map fitting all markers on the screen
        map.fitBounds(bounds);
        }
        // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
        var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
        this.setZoom(14);
        google.maps.event.removeListener(boundsListener);
        });
        
        }
        </script>
</html>