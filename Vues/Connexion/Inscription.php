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

