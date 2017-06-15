<?php

include_once '../Modeles/dbconnect.php';

session_start();

$user = $_POST["user"];
$pass = $_POST["pass"];

$db = new PDO("mysql:host=" . Config::SERVERNAME . ";dbname=" . Config::DBNAME, Config::USER, Config::PASSWORD);

$req = $db->prepare("SELECT Prenom_Personne, Nom_Personne, Role FROM utilisateur WHERE ID_Personne=:user and Password_Personne=:mdp");

$req->bindParam(":user", $user);

$req->execute();

$resultat = $req->fetchAll();

if (count($resultat) == 0) {
    $req = $db->prepare("SELECT Prenom_Personne, Nom_Personne, Role FROM utilisateur WHERE MAIL_Personne=:mail and Password_Personne=:mdp");

    $req->bindParam(":mail", $user);

    $req->bindParam(":mdp", $pass);

    $req->execute();

    $resultat = $req->fetchAll();
}

$db=null;

if (count($resultat) == 0) {
    header("location: ../Vues/Connexion/Connexion.php?mes=inc");
} else {
    $_SESSION["Nom"] = $resultat[0]["Nom_Personne"];
    $_SESSION["Prenom"] = $resultat[0]["Prenom_Personne"];
    $_SESSION["Role"] = $resultat[0]["Role"];
    $_SESSION["Mail"] = $resultat[0]["MAIL_Personne"];

    if ($resultat[0]["Role"] == 1) {
        header("location: ../Vues/Accueil.php?mes=bvn");
    } else {
        header("location: ../Vues/Accueil_Employer.php?mes=bvn");
    }
}




?>