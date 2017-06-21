    <?php //if($_POST["mes"]=="inc") {echo "utilisateur ou mot de passe incorect";} ?>

    <div class="container" style="width: 300px;">
        <form action="index.php?page=verifco" method="post">


            <h2 class="form-signin-heading">Connectez vous</h2>
            <label for="inputEmail" class="sr-only">Addresse email</label>
            <input type="email" name="mail" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputPassword" class="sr-only">Mot de passe</label>
            <input type="password" name="pass" class="form-control" placeholder="Password" required>
            <div class="checkbox">
                <label>
                        <input type="checkbox" value="remember-me"> Ce souvenir de moi
                  </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Connexion</button>
    </div>
    </form>

    <br><br>
    <!-- /END THE FEATURETTES -->
    <!-- FOOTER -->
    <footer>

        <p>&copy; Conciergin 2017 &middot; <a href="#">C.G.V.</a> &middot; </p>
    </footer>
    <!-- /.container -->