<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Inscription</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <link rel="stylesheet" href="css/Accueil.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>
    <body>
        <div class="barnav">
            <nav class="navbar navbar-toggleable-md navbar-light" id="barnav">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="../vue/Accueil.php">Accueil <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Nos servives</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Entreprise</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Particuliers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Découvrir</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">CGV</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contacter-nous</a>
                        </li>
                    </ul>
                    
                </div>
            </nav>
        </div>
    </body>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <form action="Page-Ajout-ut.php" method="post" class="col-xs-12 col-md-4 col-md-offset-4">
                    
<br><br>

                    <h1>Nouvel Utilisateur</h1>
                    <FONT color="red">
                    <?php
                    switch ($_GET["er"]) {
                    case "mdp-0" :
                    echo ' <h3> Erreur : mot de passe non renseigné </h3><br> ';
                    break;
                    case "mdp-1" :
                    echo ' <h3> Erreur : Confirmation mot de passe </h3><br> ';
                    break;
                    case "role" :
                    echo ' <h3> Erreur : Role non renseigné </h3><br> ';
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
                    

<br><br>



                    <div class="form-group">
                        <label for="Nom" class="control-label">Pseudo</label>
                        <input type="text" name="Pseudo" id="Pseudo" class="form-control">
                    </div>
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
                    <br>
                    <input type="submit" value="Confimer" class="btn btn-success">
                    <a href="../Page-acceuil-admin.php?mes=ann" class="btn btn-info">annuler</a></td>
                </form>
            </div>
        </div>
    </div>
</body>

<!--BOOTSTRAP-->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

</html>