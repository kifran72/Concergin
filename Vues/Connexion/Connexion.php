<style>
    .container {
        width: 300px;
    }
    
    .top {
        margin-top: 50px !important;
    }
    
    .Checksign {
        text-align: center;
        margin-top: 10%;
    }
    
    .btn {
        margin-top: 5%;
    }
</style>


<form class="top" action="index.php?page=verifco" method="post">

    <div class="container">
        <h2 class="form-signin-heading">Connectez vous</h2>
        <label for="inputEmail" class="sr-only">Addresse email</label>
        <input type="email" name="mail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Mot de passe</label>
        <input type="password" name="pass" class="form-control" placeholder="Password" required>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Se souvenir de moi
            </label>
        </div>
        <div class="Checksign">
            <label>
                Vous n'êtes pas inscrit ? Cliquer <a href="index.php?page=Inscription">ici</a>
            </label>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
        </div>


</form>

<br><br>
<!-- /END THE FEATURETTES -->
<!-- FOOTER -->