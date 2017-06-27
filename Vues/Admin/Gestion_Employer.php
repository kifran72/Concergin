
<form action="Gestion_Employer.php" method="post">

    <div class="container" style="margin-top: 5%;">
                        <h2>Gérer les comptes</h2>
                        <br><br>
                        <table class="table">
                                    <tr>
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th>Mail</th>
                                    </tr>


                                

        <?php
        
        if(isset($_POST['action']) && !empty($_POST)){
            
            $id_personne = $_POST['id'];

             include_once 'Modeles/DeleteUser.php';
            DeleteUser($id_personne);

            echo 'Personne supprimé !';
        }

            require_once 'Modeles/dbconnect.php';
            
               
            $db = new PDO("mysql:host=" . Config::SERVERNAME . ";dbname=" . Config::DBNAME, Config::USER, Config::PASSWORD);
            $req = $db->prepare("SELECT * FROM utilisateur WHERE Role = 0");
            $req->execute();
            $resultat = $req->fetchAll();
            
        foreach ($resultat as $ligne) {
            echo '<tr>' .
                '<td>' . $ligne['Nom_Personne'] . '</td>' .
                '<td>' . $ligne['Prenom_Personne'] . '</td>' .
                '<td>' . $ligne['Mail_Personne'] . '</td>' .
                '<td>' . '<form id="form-hidden" method="post" action="index.php?page=gestion-employer">
						<input type="submit" name="action" value="X" class="btn btn-danger" />
						<input type="hidden" name="id" value="'.$ligne['ID_Personne'].'">
						<i id="supp" class="ion-android-close"></form></td></tr>';
                        
        }
        $db = null;
        ?>
    </table>
</div>
</form>