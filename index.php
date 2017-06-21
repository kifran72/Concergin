<?php
ob_start();
    session_start();
    

    if(isset($_GET['page']) && !empty($_GET))
    {
        switch ($_GET['page']){

            case 'Connexion':
                $content_for_layout = 'Vues/Connexion/Connexion.php';
                break;
            case 'verifco':
                $content_for_layout = 'Vues/Connexion/Verif_connexion.php';
                break;

                //###########//

            case 'Commande':
                $content_for_layout = 'Vues/Clients/Commande/Je_Commande.php';
                break;
            case 'Prestataires':
                $content_for_layout = 'Vues/Clients/La_Communaute/Prestataire.php';
                break;

                //###########//

            default:
                $content_for_layout = 'Vues/Accueil.php';
                break;

        }
    } else {
        $content_for_layout = 'Vues/Accueil.php';
    }

    if(isset($_SESSION['logged']) && !empty($_SESSION))
    {
        if($_SESSION['logged'] == 0){
        
            include "Vues/layout/Default_Bar_Nav.php";
        
        } else {

            include "Vues/layout/Default-Employers.php";

        }

    } else {

        include "Vues/layout/Default_Bar_Nav.php";

    }

    var_dump($_POST);
    var_dump($_SESSION);
?>