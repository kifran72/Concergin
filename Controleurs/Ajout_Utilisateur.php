<?php

include_once '../Modeles/dbconnect.php';




$Nom = $_POST["Nom"];

if ($_POST["Nom"] == "") {
    header("location: ../Vues/Connexion/Inscription.php?er=nom");
    die();

}

$Prenom = $_POST["Prenom"];

if ($_POST["Prenom"] == "") {
    header("location: ../Vues/Connexion/Inscription.php?er=prenom");
    die();
}

$Mail = $_POST["Mail"];

if ($_POST["Mail"] == "") {
    header("location: ../Vues/Connexion/Inscription.php?er=mail");
    die();

}

if ($_POST["MDP"] == "") {
    header("location: ../Vues/Connexion/Inscription.php?er=mdp-0");
    die();
}

if ($_POST["MDP"] != $_POST["MDP-conf"]) {
    header("location: ../Vues/Connexion/Inscription.php?er=mdp-1");
    die();
}

$MDP = $_POST["MDP"];
$MDP_conf = $_POST["MDP-conf"];



$db = new PDO("mysql:host=" . Config::SERVERNAME . ";dbname=" . Config::DBNAME, Config::USER, Config::PASSWORD);

$req = $db->prepare("INSERT INTO Utilisateur(Nom_Personne, Prenom_Personne, Password_Personne, Mail_Personne) VALUES (:nom,:prenom,:mdp,:mail)");

$req->bindParam(":nom", $Nom);
$req->bindParam(":prenom", $Prenom);
$req->bindParam(":mdp", $MDP);



if ($req->errorInfo()[0] == '00000') {
    header("location: ../Vues/Accueil.php?mes=utok");
}

if ($req->errorInfo()[0] != '00000') {
    header("location: ../Vues/Accueil.php?mes=fail-ut");
}

