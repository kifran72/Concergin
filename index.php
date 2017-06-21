<?php
    ob_start();
    session_start();
    

    if(isset($_GET['page']) && !empty($_GET))
    {
        switch ($_GET['page']){

            case 'Connexion':
                $content_for_layout = 'Vues/Connexion/Connexion.php';
                break;
            case 'Inscription':
                $content_for_layout = 'Vues/Connexion/Inscription.php';
                break;    
            case 'Deconnexion':
                $content_for_layout = 'Vues/Connexion/Deconnexion.php';
                break;
            case 'verifco':
                $content_for_layout = 'Vues/Connexion/Verif_connexion.php';
                break;

                //###########//

            case 'Commande':
                $content_for_layout = 'Vues/Clients/Commande/Je_Commande.php';
                break;

                //###########//

            case 'Equipe':
                $content_for_layout = 'Vues/Clients/Decouvrir/Equipe.php';
                break;    
            case 'Trouver':
                $content_for_layout = 'Vues/Clients/Decouvrir/Trouver.php';
                break;
            case 'Quisommenous':
                $content_for_layout = 'Vues/Clients/Decouvrir/Quisommenous.php';
                break;
            case 'RevuePresse':
                $content_for_layout = 'Vues/Clients/Decouvrir/Revue_Presse.php';
                break;

                //###########//

            case 'Confiance':
                $content_for_layout = 'Vues/Clients/La_Communaute/Confiance.php';
                break;        
            case 'Prestataires':
                $content_for_layout = 'Vues/Clients/La_Communaute/Prestataire.php';
                break;

                //###########//

            case 'Entreprise':
                $content_for_layout = 'Vues/Clients/Nos_offres/Offre-Entreprise.php';
                break;        
            case 'Particulier':
                $content_for_layout = 'Vues/Clients/Nos_offres/Offre-Particulier.php';
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

?>