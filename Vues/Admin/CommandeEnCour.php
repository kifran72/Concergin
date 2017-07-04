<form action="CommandeEnCour.php" method="post">

    <div class="container" style="margin-top: 5%;">
                        <h2>Employer</h2>
                        <br><br>
                        <table class="table">
                                    <tr>
                                        <th>ID</th>
                                        <th>Commande</th>
                                        
                                    </tr>


                                

        <?php
        
        if(isset($_POST['action']) && !empty($_POST)){
            
            $id_commande = $_POST['id'];

             include_once 'Modeles/DeleteCommande.php';
             DeleteCommande($id_commande);

            echo 'Commande supprimé !';
        }

            require_once 'Modeles/dbconnect.php';
            
               
            $db = new PDO("mysql:host=" . Config::SERVERNAME . ";dbname=" . Config::DBNAME, Config::USER, Config::PASSWORD);
            $req = $db->prepare("SELECT * FROM commandes");
            $req->execute();
            $resultat = $req->fetchAll();
            
        foreach ($resultat as $ligne) {
            echo '<tr>' .
                '<td>' . $ligne['ID_commande'] . '</td>' .
                '<td>' . $ligne['commande'] . '</td>' .
                '<td>' . '<form id="form-hidden" method="post" action="index.php?page=VueCommande">
						<input type="submit" name="action" value="X" class="btn btn-danger" />
						<input type="hidden" name="id" value="'.$ligne['ID_commande'].'">
						<i id="supp" class="ion-android-close"></form></td></tr>';
                        
        }
        $db = null;
        ?>
    </table>
</div>
</form>