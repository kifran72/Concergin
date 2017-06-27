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
                $content_for_layout = 'Modeles/Verif_connexion.php';
                $title = 'Vérification de la connexion';
                break;
            case 'Ajoutut':
                $content_for_layout = 'Modeles/Ajout_Utilisateur.php';
                $title = 'Inscription';
                break;

                //###########//

            case 'Commande':
                $content_for_layout = 'Vues/Clients/Commande/Je_Commande.php';
                $title = 'Je commande';
                if($_SESSION['logged'] == 0)
                    {
                        header('location: index.php?page=Connexion');
                        ob_flush();
                    }
                break;
            case 'Valid':
                $content_for_layout = 'Modeles/Validation_Commande.php';
                $title = 'valider commande';
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

            case 'Services':
                $content_for_layout = 'Vues/Clients/Services/Services.php';
                $title = 'Nos services';
                break;

            case "ServiceStopAndWork":
                $content_for_layout = 'Vues/Clients/Services/ServiceStopandWord.php';
                $title = 'Service Stop & Word';
                break;
            case "ServiceCorning":
                $content_for_layout = 'Vues/Clients/Services/ServiceCorning.php';
                $title = 'Service Corning';
                break;
            case "ServiceAvon":
                $content_for_layout = 'Vues/Clients/Services/ServiceAvon.php';
                $title = 'Service de la gare de Avon';
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
            case 'VueCommande':
                $content_for_layout = 'Vues/Admin/CommandeEnCour.php';
                $title = 'Vues des commandes';
                break;
            case 'DeleteCommande':
                $content_for_layout = 'Modeles/DeleteCommande.php';
                $title = 'Delete commande';
                break;
            case 'ValidCommande':
                $content_for_layout = 'Modeles/Validation_Commande.php';
                $title = 'Validation';
                break;
            case 'gest-emp':
                $content_for_layout = 'Modeles/gestion_employer.php';
                $title = 'Gestion employer';
                break;
            case 'gestion-employer':
                $content_for_layout = 'Vues/Admin/Gestion_Employer.php';
                $title = 'Gestion des employer';
                break;
            case 'ajout-emp':
                $content_for_layout = 'Modeles/Ajout_Employer.php';
                $title = 'Ajout Employer';
                break;
            case 'ajouter-emp':
                $content_for_layout = 'Vues/Admin/Ajout_Employer.php';
                $title = 'Ajouter un employer';
                break;
            case 'dbconnect':
                $content_for_layout = 'Modeles/dbconnect.php';
                $title = 'dbconnect';
                break;
            case 'DeleteUser';
                $content_for_layout = 'Modeles/DeleteUser.php';
                $title = 'Delete user';
                break;
            case 'Explorer':
                $content_for_layout = 'Vues/Admin/Explorer/index.html';
                $title = 'Explorateurs de fichiers';
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

        if(isset($_SESSION['Role']) && !empty($_SESSION)){
        
        if($_SESSION['Role'] == 0){

                include "Vues/layout/Default_Admin.php";
            }
            else{

                include "Vues/layout/Default_Connected.php";
            }
        }
                
            }

    } else {

        include "Vues/layout/Default_Bar_Nav.php";

    }

    
