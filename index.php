<?php
    ob_start();
    session_start();
    

    if(isset($_GET['page']) && !empty($_GET))
    {
        switch ($_GET['page']){

            case 'Connexion':
                $content_for_layout = 'Vues/Connexion/Connexion.php';
                $title = 'Connexion';
                break;
            case 'Inscription':
                $content_for_layout = 'Vues/Connexion/Inscription.php';
                $title = 'Inscription';
                break;    
            case 'Deconnexion':
                $content_for_layout = 'Vues/Connexion/Deconnexion.php';
                $title = 'Déconnexion';
                break;
            case 'verifco':
                $content_for_layout = 'Vues/Connexion/Verif_connexion.php';
                $title = 'Vérification de la connexion';
                break;

                //###########//

            case 'Commande':
                $content_for_layout = 'Vues/Clients/Commande/Je_Commande.php';
                $title = 'Je commande';
                break;

                //###########//

            case 'Equipe':
                $content_for_layout = 'Vues/Clients/Decouvrir/Equipe.php';
                $title = "L'équipe";
                break;    
            case 'Trouver':
                $content_for_layout = 'Vues/Clients/Decouvrir/Trouver.php';
                $title = 'Où nous trouver?';
                break;
            case 'Quisommenous':
                $content_for_layout = 'Vues/Clients/Decouvrir/Quisommenous.php';
                $title = 'Qui sommes-nous ?';
                break;
            case 'RevuePresse':
                $content_for_layout = 'Vues/Clients/Decouvrir/Revue_Presse.php';
                $title = 'Revue de presse';
                break;

                //###########//

            case 'Confiance':
                $content_for_layout = 'Vues/Clients/La_Communaute/Confiance.php';
                $title = 'Ils nous font confiance';
                break;        
            case 'Prestataires':
                $content_for_layout = 'Vues/Clients/La_Communaute/Prestataire.php';
                $title = 'Les prestataires';
                break;

                //###########//

            case 'Entreprise':
                $content_for_layout = 'Vues/Clients/Nos_offres/Offre-Entreprise.php';
                $title = 'Offres pour les entreprises';
                break;        
            case 'Particulier':
                $content_for_layout = 'Vues/Clients/Nos_offres/Offre-Particulier.php';
                $title = 'Offres pour les particuliers';
                break;
              
                //###########//

            default:
                $content_for_layout = 'Vues/Accueil.php';
                $title = 'Accueil';
                break;

        }
    } else {
        $content_for_layout = 'Vues/Accueil.php';
        $title = 'Accueil';
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