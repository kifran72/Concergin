<?php

    include_once 'Modeles/dbconnect.php';

    $mail = $_POST["mail"];
    $pass = md5($_POST["pass"]);

    $db = new PDO("mysql:host=" . Config::SERVERNAME . ";dbname=" . Config::DBNAME, Config::USER, Config::PASSWORD);

    $req = $db->prepare("SELECT Prenom_Personne, Nom_Personne, Role, Mail_Personne FROM utilisateur WHERE Mail_Personne=:mail and Password_Personne=:mdp");
    $req->bindParam(":mail", $mail);
    $req->bindParam(":mdp", $pass);
    $req->execute();

    $resultat = $req->fetchAll();

    if (count($resultat) == 0) {
        $req = $db->prepare("SELECT Prenom_Personne, Nom_Personne, Role, Mail_Personne FROM utilisateur WHERE Mail_Personne=:mail and Password_Personne=:mdp");

        $req->bindParam(":mail", $mail);
        $req->bindParam(":mdp", $pass);
        $req->execute();

        $resultat = $req->fetchAll();
    }

    $db=null;

    if (count($resultat) == 0) {

        $_SESSION['logged'] = 0;
        header("location: index.php?page=Connexion");
        ob_flush();

    } else {
        $_SESSION['logged'] = 1;
        $_SESSION["Nom"] = $resultat[0]["Nom_Personne"];
        $_SESSION["Prenom"] = $resultat[0]["Prenom_Personne"];
        $_SESSION["Role"] = $resultat[0]["Role"];
        $_SESSION["mail"] = $resultat[0]["Mail_Personne"];

        header("location: index.php");
        ob_flush();

    }

?>