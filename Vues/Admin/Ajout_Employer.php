<style>
    .top{
        margin-top: 50px;
    }

</style>

<div class="container-fluid">
        <div class="container">
        <div class="row">
            <form action="index.php?page=ajout-emp" method="post" class="col-xs-12 col-md-4 col-md-offset-4">
                <h1>Ajouter un compte Administrateur</h1>
                
                <br><br>
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
                    <input type="text" name="Addresse" id="Addresse" class="form-control">
                </div>
                <div class="form-group">
                    <label for="phone" class="control-label">Numéro de téléphone</label>
                    <input type="text" name="Phone" id="phone" class="form-control">
                </div>
                

               
                <br>
                <input type="submit" value="Confimer" class="btn btn-success">
                <a href="../Accueil_Employer.php?mes" class="btn btn-info">annuler</a></td>
            </form>
            </div>
            </div>
        </div>
<br><br>

